<?php 
$message = $_POST['message'];
$para = $_POST['para'];
$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "carts";

// Create connection

session_start();
    if ($_SESSION['username']){
    echo "Bienvenido " . $_SESSION['username'];
    
    
$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
$sender = $_SESSION['username'];
$sql = "INSERT INTO messages(message,sender,receiver) VALUES('$message','$sender','$para')";

if(mysqli_query($conn,$sql)) {
    echo "<script>alert('Mensaje enviado!');window.location.href='profile.php';</script>";
}
else {
    echo "<script>alert('Hay un error asegurate de que el nombre de usuario existe en nuestra base de datos!');window.location.href='signin.php';</script>";
}

}
else {
    header("Location:signin.php");
}
?>