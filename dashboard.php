<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiFi Recharge Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .recharge-container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

/* Form Styling */
form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Label and Input Fields */
label {
    font-weight: bold;
    text-align: left;
}

input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 100%;
}

/* Button Styling */
button {
    background-color: #2a9d8f;
    color: white;
    border: none;
    padding: 12px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 8px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #21867a;
}
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Wifi Recharge Portal</div>
        <ul class="nav-links">
            <li><a href="index.html">Login</a></li>
            <li><a href="signup.html">Sign Up</a></li>
            <li><a href="packs.html">View Packs</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="index.html">Logout</a></li>
        </ul>
    </nav>

    <!-- Dashboard Container -->
    <div class="dashboard-container" style = "margin-top: 400px">
        <h2>Your Dashboard</h2>
        
        <div class="dashboard-row">
            <div class="dashboard-item">
                <label>Start Date:</label>
                <span id="start-date">01/01/2024</span> <!-- Placeholder for start date -->
            </div>
            <div class="dashboard-item">
                <label>End Date:</label>
                <span id="end-date">01/31/2024</span> <!-- Placeholder for end date -->
            </div>
        </div>

        <div class="dashboard-row">
            <div class="dashboard-item">
                <label>Duration (days):</label>
                <span id="duration">30</span> <!-- Placeholder for duration -->
            </div>
            <div class="dashboard-item">
                <label>Remaining Days:</label>
                <span id="remaining-days">15</span> <!-- Placeholder for remaining days -->
            </div>
        </div>

        <div class="dashboard-item">
            <label>Speed (Mbps):</label>
            <span id="speed">50</span> <!-- Placeholder for speed -->
        </div>
    </div>

    <div class="recharge-container">
        <h2>Recharge Now</h2>
        <form>
            <label for="pack-name">Pack Name:</label>
            <input type="text" id="pack-name" placeholder="Enter Pack Name" required>

            <label for="pack-duration">Pack Duration (Days):</label>
            <input type="number" id="pack-duration" placeholder="Enter Pack Duration" required>

            <label for="pack-speed">Pack Speed (Mbps):</label>
            <input type="number" id="pack-speed" placeholder="Enter Pack Speed" required>

            <button type="submit">Recharge</button>
        </form>
    </div>

</body>
</html>
