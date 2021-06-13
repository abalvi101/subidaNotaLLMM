<?php

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

define('USER', 'root');
define('PASSWORD', 'Quiero10cocretas');
define('HOST', 'localhost');
define('DATABASE', 'servidorapache');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE.";charset=utf8mb4", USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
