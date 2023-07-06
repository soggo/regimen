<?php
$servername = "localhost"; 
$username = "koded";
$password = "Sogo@1234";
$dbname = "storage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name']; 
$email = $_POST['email'];

$sql = "INSERT INTO regment (name, email) 
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}

$conn->close();
?>