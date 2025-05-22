<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['phone']) >= 1 
        ) {
            $name = trim($_POST['name']);
            $apellidos = trim($_POST['apellidos']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $phone = trim($_POST['phone']);
            $fecha = date("Y-m-d");
            $consulta = "INSERT INTO datos(nombre, apellidos, email, `contrasena`, telefono, fecha)
                VALUES('$name','$apellidos','$email','$password','$phone','$fecha')"; 
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
             ?>
               <h3 class="success" style="text-align: center; width: 2200px; color: red;">Tu registro fue exitoso</h3>
             <?php   
            } else {
             ?>
                <h3 class="error" style="text-align: center; width: 2200px; color: red;">Ocurrio un error</h3>
             <?php
            }
         } else {
            ?>
                <h3 class="error" style="text-align: center; width: 2200px; color: red;">Verifique todos los campos </h3>
             <?php
         }
   
}

?>