<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <h1>Bienvenidos</h1>
    </nav>

    <div class="contenedor">
    <form action="validacion_sesion.php" method="post">
    <h2>Registrate</h2>
    <br> <br>
    <label for="">Usuario</label>
    <br>
    <input type="text" name="usuario"> 
    <br> <br>
    <label for="">Contraseña</label>
    <br>
    <input type="password" name="password">
    <br> <br>
    <button class="ingresar">Ingresar</button>
    </form>
    <!-- <button><a href="Registro.php"></a> Registrate </button> -->
    <p class="registrate">¿No tienes cuenta? Registrate!</p>
    <p class="vinculo"><a href="Registro.php" class="r">Crear cuenta</a></p>
    </div>

</body>
</html>