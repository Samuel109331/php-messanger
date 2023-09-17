<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    session_start();
    if ($_SESSION['username']){
    echo "Bienvenido " . $_SESSION['username'];
    }
    else {
        header("Location:signin.php");
    }
    ?>
    </title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="sendmessage.php">Enviar mensaje</a></li>
            <li><a href="inbox.php">Bandeja de entrada</a></li>
            <li><a href="sent.php">Mostrar mensajes enviados</a></li>
            <li><a href="logout.php">Cerrar session</a></li>
        </ul>
    </div>
    <div class="contents">

    </div>
</body>
</html>