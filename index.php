<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido al Login/Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Login/Registro</h1>
        
        <?php if (isset($_SESSION['usuario'])){ ?>
            <p>Hola, <?php echo $_SESSION['usuario']; ?>. Has iniciado sesión.</p>
            <a href="Reg_Log/logout.php">Cerrar sesión</a>
        <?php } else { ?>
            <p>No has iniciado sesión, elige una opción:</p>
            <a href="Reg_Log/register.php">Registrar usuario</a><br>
            <a href="Reg_Log/login.php">Iniciar sesión</a>
        <?php } ?>
    </div>
</body>
</html>
