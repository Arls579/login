<?php

include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen($_POST['name']) >=1 &&
        strlen($_POST['email']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['password']) >=1 
        
        )  {
           
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha= date("d/m/y");
            $contraE = password_hash($password,PASSWORD_DEFAULT);
            $consulta  ="INSERT INTO datos(nombre, email, telefono, contraE, fecha)
              VALUES('$name', '$email', '$phone', '$contraE', '$fecha')";
              
              $resultado = mysqli_query($conexion, $consulta);
              if($resultado){
                ?>
              <div class="container">
               <h3 class="success">Tu registro se ha completado</h3>
               </div>

                <?php
              } else{
                ?>
                 <div class="container">
                 <h3 class="success">Error al registrarse</h3>
                 </div>

                <?php
              }
             
            }else{
            ?>
            <div class="container">
             <h3 class="error">Llena todos los campos</h3>
             </div>
            <?php
    }

}

?>