<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
 <form method="post" >
   <section class="form-register">
    <h4>Registro de usuario</h4>
    <input class="controls" type="text" name="name" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="email" id="correo" placeholder="Ingrese Email">
    <input class="controls" type="password" name="password" id="contraseña" placeholder="Ingrese su contraseña">
    <input class="controls" type="number" name="phone" id="telefono" placeholder="Celular">
    <input class="botons1" type="submit" name="register" value="Registrarme">
 </form>
    
   </section>
   <?php
       include("registrar.php");
     ?>

</body>

</html>