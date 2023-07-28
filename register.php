<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $username = $_POST["username"];
  $handle = $_POST["handle"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $security_question = $_POST["security_question"];
  $security_answer = $_POST["security_answer"];
  $creation_date = date('Y-m-d'); // Current date

  // Generate a random unique user ID
  $user_ID = uniqid();

  // Makes full handle
  $full_handle = "@" . $handle;

  // Connect to the database
  $servername = "47.45.150.233:3306";
  $db_username = "web";
  $db_password = "@lMfWYj)RTV/6a4X"; // Enter your MySQL password here
  $dbname = "DRAGONAPI"; // Replace with your actual database name

  $conn = new mysqli($servername, $db_username, $db_password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Hash the password for security
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert user data into the database
  $sql = "INSERT INTO user (user_ID, username, handle, email, password, security_question, security_answer, creation_date) 
          VALUES ('$user_ID', '$username', '$full_handle', '$email', '$hashed_password', '$security_question', '$security_answer', '$creation_date')";

  if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>