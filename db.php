<?php
// config/db.php

$host = 'localhost';
$username = 'root';  // Database username
$password = '';      // Database password
$database = 'emergency_hotlines';  // Database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // Output error if connection fails
}
?>
