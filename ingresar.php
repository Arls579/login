<?php
require("conexion.php");

if(isset($_POST['ingresar'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['password']) >= 1){
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);

        
        $resultadoC = mysqli_query($conexion, "SELECT contraE FROM datos WHERE nombre = '$name'");

           echo "<script>console.log('Debug Objects:'$password' );</script>";
        if($resultadoC->num_rows > 0){
            $fila = $resultadoC->fetch_assoc();
            $contraE = $fila['contraE'];
            var_dump($contraE);
            var_dump($password);
            
            if(password_verify($password, $contraE)){
                $consulta = "SELECT * FROM registros WHERE nombre = '$name'";
                $resultado = mysqli_query($conexion, $consulta);
                if(!$resultadoC){
                   
                }    
                echo "Error en la consulta: " . mysqli_error($conexion);            
                if($resultado){
                    header("Location: bienvenido.php");
                    exit; 
                } else {
                    echo "<h3 class='error'>Error en la consulta</h3>";
                    var_dump(mysqli_error($conexion));
                }
            } else {
                echo "<h3 class='error'>Contraseña incorrecta</h3>";
            }
        } else {
            echo "<h3 class='error'>Usuario no encontrado</h3>";
        }
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
?>


