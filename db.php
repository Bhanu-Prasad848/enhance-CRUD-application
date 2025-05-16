<?php
$host = 'localhost';
$user = 'root'; // Default for XAMPP
$pass = '';
$db   = 'advanced_blog';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
