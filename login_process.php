<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $username = $_POST["username"];
  $password = $_POST["password"];

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

  // Retrieve the hashed password for the provided username
  $sql = "SELECT password FROM users WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hashed_password = $row["password"];

    // Verify the provided password against the hashed password
    if (password_verify($password, $hashed_password)) {
      echo "Login successful!";
      // Redirect to the user's dashboard or home page
      // header("Location: dashboard.php"); // Replace 'dashboard.php' with your page
      exit;
    } else {
      echo "Incorrect password. Please try again.";
    }
  } else {
    echo "User not found. Please check your username.";
  }

  $conn->close();
}
?>
