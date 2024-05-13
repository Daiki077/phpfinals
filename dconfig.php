<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "canteentb";
$dsn = "mysql:host={$host};dbname={$dbname}";

$conn = new PDO($dsn, $username, $password);
$conn->exec("SET time_zone = '+08:00';");

?>