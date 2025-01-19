<?php
$host = 'localhost';
$user = 'root';
$password = ''; 
$db = 'db_rasa';

$connect = new mysqli($host, $user, $password, $db);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
