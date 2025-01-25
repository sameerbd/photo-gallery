<?php
$host = 'localhost';
$user = 'root'; // Replace with your DB username
$pass = 'roottesting2025'; // Replace with your DB password
$dbname = 'photo_gallery';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>