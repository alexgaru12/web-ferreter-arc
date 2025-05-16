<?php
include("conexion.php");
session_start();

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correo electrónico inválido.";
        exit();
    }

    $consulta = "SELECT contraseña FROM datos WHERE email = ?";
    $stmt = mysqli_prepare($conex, $consulta);

    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($conex));
    }

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        if ($password === $row['contraseña']) {
            $_SESSION['email'] = $email;
            header("Location: bienvenido.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="formulario">
        <h1>Inicio de sesion</h1>
        <form method="post" action="">
            <div class="username">
                <input type="email" name="email" required>
                <label>Correo electronico</label>
            </div>
            <div class="username">
                <input type="password" name="password" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar"> <a href="recuperar.php">Recuperar contraseña</a></div>
            <input type="submit" name="login" value="Ingresar">
            <div class="registrarse">
                <a href="registro.php">Registrarse</a>
            </div>
        </form>

    </div>
     <?php
    
     ?>

</body>

</html>