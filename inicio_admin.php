<?
session_start();
session_destroy();
if (!$_SESSION) {
    header("Location: inicio_admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validar_inicio_usuario.php" method="POST">
        <label for="">Usuario:</label>
        <input type="text" name="usuario">
        <label for="">Contraseña</label>
        <input type="text" name="contraseña">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>