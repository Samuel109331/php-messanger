<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajeria</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php

session_start();
if ($_SESSION['username']){
    header("Location: profile.php");
    exit();
} else {
 // Make sure to exit after a header redirect
}
error_reporting(0);
?>

    <div class="form-container">
        <form action="savesession.php" method="post">
            <div class="input-container">
                <label>Nombre de usuario</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-container">
                <label>Clave</label>
                <input type="password" name="pass" required>
            </div>
            <div class="input-container">
                <button style="grid-column:span 2;" type="submit">Iniciar session</button>
            </div>
            <div class="input-container">
                <p>O</p>
                <a href="index.php">Registerese aqui!</a>
            </div>
        </form>
    </div>
</body>
</html>