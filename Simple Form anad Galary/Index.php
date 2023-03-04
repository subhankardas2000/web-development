<?php
  // Database configuration
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login";

  // Create database connection
  $conn = new mysqli($host, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user details into database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
      // Redirect to home page
      header("Location: home.php");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
  }
?>