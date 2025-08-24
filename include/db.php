<?php
// Database connection
$host = 'db';
$username = 'root';  
$password = 'root';      
$database = 'railway';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
?>
