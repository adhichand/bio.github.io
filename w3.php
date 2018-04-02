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
$name = $_POST['name'];
$username = $_POST['username'];
$password =$_POST['password'];
$sql = "INSERT INTO mtb4 (name,username,password)
VALUES ('$name','$username','$password');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
