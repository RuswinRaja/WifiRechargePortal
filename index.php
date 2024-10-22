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

$uname = $_POST['username'];
$passwd = $_POST['password'];

$sql = "SELECT uname, passwd FROM signup";
$result = $conn->execute_query($sql);

while ($row = $result->fetch_assoc()) {
    if($uname == 'admin' && $passwd == 'admin123'){
        header("Location: ./admin.php");
    }
    else if($row['uname'] == $uname && $row['passwd'] == $passwd){
      header("Location: ./dashboard.php");
    }
    else{
      echo '<script>alert("Wrong Credentials! Try again.")</script>';
      header("Location: ./index.html");
    }
}
$conn->close();
?> 