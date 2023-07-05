$name = $_POST['name'];
$email = $_POST['email'];

// Assuming you have an established database connection ($conn)
$sql = "INSERT INTO regrec (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === true) {
    // Data inserted successfully
    echo "Thank you for subscribing!";
} else {
    // Error occurred
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
