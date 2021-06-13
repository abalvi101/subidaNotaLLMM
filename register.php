<?php

  mb_internal_encoding('UTF-8');
  mb_http_output('UTF-8');

  include('config.php');
  session_start();

  if (isset($_POST['register'])) {

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $password_hash = password_hash($password, PASSWORD_BCRYPT);

      echo "$username $email $password";

      $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
      $query->bindParam("email", $email, PDO::PARAM_STR);
      $query->execute();

      if ($query->rowCount() > 0) {
          echo '<p class="error">The email address is already registered!</p>';
      }

      if ($query->rowCount() == 0) {
          $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
          $query->bindParam("username", $username, PDO::PARAM_STR);
          $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
          $query->bindParam("email", $email, PDO::PARAM_STR);
          $result = $query->execute();

          if ($result) {
             header("location:index.html");
          } else {
              echo '<p class="error">Something went wrong!</p>';
          }
      }
  }

?>
