<?php
session_start();
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT IDUSUARIO, PASSWORD, ROL FROM USUARIO WHERE USERNAME = :username";
    $stmt = oci_parse($conexion, $query);
    oci_bind_by_name($stmt, ":username", $username);
    oci_execute($stmt);

    if ($row = oci_fetch_assoc($stmt)) {
        if (password_verify($password, $row['PASSWORD'])) {  // Verificación de la contraseña
            $_SESSION['usuario_id'] = $row['IDUSUARIO'];
            $_SESSION['rol'] = $row['ROL'];
            header("Location: dashboard.php");  // Redirigir al panel principal
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}
?>