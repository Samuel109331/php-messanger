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
    echo header("Location: profile.php");
    exit();
    }
    
    ?>
    <div class="form-container">
        <form action="register.php" method="post">
            <div class="input-container">
                <label>Nombre completo</label>
                <input type="text" name="fullname" required>
            </div>
            <div class="input-container">
                <label>Elige nombre de usuario</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-container">
                <label>Clave</label>
                <input type="password" name="pass" pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
            </div>
            <div class="input-container">
                <button style="grid-column:span 2;" type="submit">Registrar</button>
            </div>
            <div class="input-container">
                <p>O</p>
                <a href="signin.php">Inicia session aqui!</a>
            </div>
        </form>
    </div>
</body>
</html>