<?php
$servername = "server582"; 
$username = "sogo";
$password = "Sogo@123";
$dbname = "records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name']; 
$email = $_POST['email'];

$sql = "INSERT INTO regrec (name, email) 
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}

$conn->close();
?>