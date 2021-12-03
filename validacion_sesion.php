<?php

include("db_conection.php"); //llamamos la conexion a la base de datos
//declaramos las variables que contendran los datos del formulario
$usuario=$_POST["usuario"];
$password=$_POST["password"];

//iniciamos sesion
session_start();
$_SESSION["usuario"]=$usuario;

//realizamos la peticion
$consulta= "SELECT *FROM usuario WHERE usuario='$usuario' and contrasena='$password' ";

//realizamos la consulta
$sql= mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($sql);

//validar datos
if(mysqli_num_rows($sql)!= 1) {
    //Dato incorrecto
    echo " <h1>Usuario y contraseña incorrectas </h1> ";
}
else{
    //dato correcto y entra al home
    header ('location:home.php');
}

