<?php
$servername = "localhost"; // Server name (localhost for local development)
$username = "root"; // Default username for XAMPP
$password = ""; // Default password (empty in XAMPP)
$dbname = "gembidder"; // The database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>
