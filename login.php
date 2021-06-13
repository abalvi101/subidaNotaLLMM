<?php

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        include(index.html);
	echo "<h2>Error de autentificación</h2>";
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
            header("location:subindex.html");

        } else {
            include(index.html);
	    echo "<h2>Error de autentificación</h2>";
        }
    }
}
 
?>
