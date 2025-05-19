<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecomus"; // Ensure your database name is correct

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // Checking plain text password

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();

        if ($password === $stored_password) { // Plain text password check
            echo "<script>alert('Login successful!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Invalid password'); window.location.href='index.php';</script>";
        }
    } else {
        // ✅ Show alert if email is not found
        echo "<script>alert('Email not found! Please register first.'); window.location.href='index.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
