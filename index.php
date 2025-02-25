<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
     <form action="registrar.php" method="post" >

      <h2>Bienvenido</h2>
      <p>Inicia tu registro</p>

      <div class="input-wrapper">
       <input type="text" name="name" placeholder="Nombre" >
       <img class="input-icon" src="images/name.svg" alt="">
      </div>

      <div class="input-wrapper">
       <input type="email" name="email" placeholder="Email" >
       <img class="input-icon" src="images/email.svg" alt="">
      </div>

      <div class="input-wrapper">
       <input type="tel" name="phone" placeholder="Telefono" >
       <img class="input-icon" src="images/phone.svg" alt="">
      </div>

      <div class="input-wrapper">
       <input type="password" name="password" placeholder="Contraseña" >
       <img class="input-icon" src="images/password.svg" alt="">
      </div>

      <input class="boton" type="submit" name="register" value="Enviar">
     </form>
     <p>¿Ya tienes una cuenta? <a href="sesion.php">inicia sesion</a></p>
    

</body>
</html>