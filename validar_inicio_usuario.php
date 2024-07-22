<?php

// echo "<prep>";
// var_dump($_POST);
// echo "</prep>";

$conexion = mysqli_connect("localhost:3307", "root", "", "librería");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$consulta_usuario = "SELECT * FROM administradores WHERE usuario = '$usuario' AND
contraseña = '$contraseña'";

$resultado = mysqli_query($conexion, $consulta_usuario);

$usuarioObtenido = mysqli_fetch_assoc($resultado);



if ($usuarioObtenido) {
    session_start();
    $_SESSION['usuario'] = $usuarioObtenido;
    header("Location: SESION/panel_admin.php");
}