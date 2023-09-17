<?php 
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['pass'];

$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "carts";

// Create connection
$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);

$sql = "INSERT INTO users (Fullname, username, passcode)
VALUES ('$fullname', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Registrado!');window.location.href='signin.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>