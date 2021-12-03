<?php
require("db_conection.php");

$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$peticion=$_POST['peticion'];

$consulta= "INSERT INTO contactos (nombre,usuario,correo,peticion)
VALUE ('$nombre','$usuario','$email','$peticion')";
$verificacion= mysqli_query($conexion,$consulta);

?>