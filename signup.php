<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wifiportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$ph = $_POST['ph'];
$addr = $_POST['addr'];
$uname = $_POST['uname'];
$passwd = $_POST['passwd'];


$sql = "INSERT INTO signup (fname, lname, email, phone, addr, uname, passwd) 
VALUES ('{$fname}', '{$lname}', '{$email}', '{$ph}', '{$addr}', '{$uname}', '{$passwd}')";

if ($conn->query($sql) === TRUE) {
  header("Location: ./index.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 