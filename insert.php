<?php
$servername = "localhost";
$username = "id21346672_skynet";
$password = "C@t123456789";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>