<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = $_POST['email'];
$password = $_POST['password'];
$job =$_POST['job'];
$age =$_POST['age'];
$sql = "INSERT INTO mtb9 (email,password,job,age)
VALUES ('$email','$password','$job','$age');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
