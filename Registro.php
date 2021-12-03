<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>
    <nav>
        <h1>Regístrate para tener cuenta Pro.</h1>
    </nav>
    <div class="contenedor_p">
    <form action="validacion_registro.php" method="post">
    <h2>Registro</h2>
    <br> <br>
    <label for="">Nombre</label>
    <br>
    <input type="text" name="nombre" required>
    <br> <br>
    <label for="">Usuario</label>
    <br>
    <input type="text" name="usuario" >
    <br> <br>
    <label for="">Contraseña</label>
    <br>
    <input type="text" name="password" required>
    <br> <br>
    <label for="">Correo</label>
    <br>
    <input type="email" name="email" required> 
    <br> <br>
    <button>Registrarte</button>
    </form>
<p class="text">¿tienes una cuenta? </p>
<p class="registro"> <a href="login.php">iniciar sesión</a></p>
    </div>
</body>
</html>
