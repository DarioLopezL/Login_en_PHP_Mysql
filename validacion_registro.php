<?php
include("db_conection.php");

$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$password=$_POST["password"];
$correo=$_POST["email"];

$registro= "INSERT INTO usuario (nombre,usuario,contrasena,correo) 
VALUE ('$nombre','$usuario','$password','$correo')";
$validacion= mysqli_query($conexion,$registro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="valida.css">
    
    <title>Registros exitosa</title>
</head>
<body>
    <h1>Ingresar el usuario y la contraseña</h1>
    <h2> <a href="login.php">Volver a la sesion</a>  </h2>
</body>
</html>

