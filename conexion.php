<?php
$conex = mysqli_connect(
    "sql301.infinityfree.com",
    "if0_39010256",
    "wrU2kTvZLLwFE",
    "if0_39010256_ferreteria"
);

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>