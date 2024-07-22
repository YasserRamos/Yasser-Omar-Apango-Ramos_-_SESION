<?php
session_start();

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un Libro</title>
</head>
<body>
    <h1>Bienvenid@<?php echo $_SESSION['usuario']['nombres'] . " " . 
    $_SESSION['usuario']['apellidos']?></h1>
    <a href="SESION/admin_libros.php">Registrar un libro</a>
    <a href="SESION/cerrar_sesion.php">cerrar Sesion</a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    </form>
</body>
</html>