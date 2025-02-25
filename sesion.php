<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <form action="ingresar.php" method="post" >

      <h2>Inicia sesion</h2>

      <div class="input-wrapper">
       <input type="text" name="name" placeholder="Nombre de usuario" >
       <img class="input-icon" src="images/name.svg" alt="">
      </div>


      <div class="input-wrapper">
       <input type="password" name="password" placeholder="Contraseña" >
       <img class="input-icon" src="images/password.svg" alt="">
      </div>

      <input class="boton" type="submit" name="ingresar" value="Iniciar sesion">

     </form>
     <p>¿No tienes una cuenta? <a href="index.php">Regístrate aquí</a></p>
</body>
</html>