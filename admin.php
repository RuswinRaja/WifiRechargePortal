<?php
// Database connection settings
$host = 'localhost';  // Database host
$user = 'root';        // Database username
$pass = '';            // Database password
$db = 'wifiportal';   // Database name

// Establishing the connection
$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching all users from the database
$sql = "SELECT sid, fname, lname, email, phone, addr, uname, passwd FROM signup";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar">
        <div class="logo">Wifi Recharge Portal</div>
        <ul class="nav-links">
            <li><a href="index.html">Login</a></li>
            <li><a href="signup.html">Sign Up</a></li>
            <li><a href="packs.html">View Packs</a></li>
            <li><a href="routers.html">Routers</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
    </nav>

    <div class="admin-container">
        <h2>User Details</h2>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['sid']}</td>
                                <td>{$row['fname']}</td>
                                <td>{$row['lname']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['addr']}</td>
                                <td>{$row['uname']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No users found</td></tr>";
                }
                $conn->close(); // Close the connection
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
