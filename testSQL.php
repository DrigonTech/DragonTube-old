<?php
// Connect to the database
$servername = "47.45.150.233:3306";
$db_username = "web";
$db_password = "@lMfWYj)RTV/6a4X"; // Enter your MySQL password here
$dbname = "DRAGONAPI"; // Replace with your actual database name

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

$conn->close();
?>
