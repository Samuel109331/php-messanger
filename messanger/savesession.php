<?php
$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "carts";

// Create connection
$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming $username and $password are obtained from your form
$username = $_POST['username'];
$password = $_POST['pass'];

// SQL query to check if the user exists in the database
$sql = "SELECT * FROM users WHERE username='$username' AND passcode='$password'";
$result = mysqli_query($conn, $sql);

// Check if a row was found (indicating the user exists)
if (mysqli_num_rows($result) > 0) {
    // Start a session
    session_start();

    // Store the username in the session
    $_SESSION['username'] = $username;

    echo "<script>alert('Session iniciado!');window.location.href='profile.php';</script>";
} else {
    echo "<script>alert('Datos incorrectos!');window.location.href='signin.php';</script>";
}

// Close the database connection
mysqli_close($conn);
?>
