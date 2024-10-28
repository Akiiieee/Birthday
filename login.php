<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$hashedPassword = md5($password);

// Query to check if the user exists
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$hashedPassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "Login successful!";
} else {
    // Invalid credentials
    echo "Invalid username or password";
}


$conn->close();
?>
