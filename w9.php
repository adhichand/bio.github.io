<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO mtb9 (email,password)
VALUES ('$email','$password');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
