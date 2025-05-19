<?php
$servername = "localhost";
$username = "root";
$password = "";  // Default XAMPP MySQL password is empty
$dbname = "ecomus";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
