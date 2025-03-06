<?php
require 'includes/auth.php';

if (!isLoggedIn() || !isAdmin()) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Panel de Administración</h1>
    <p>Bienvenido, administrador. Aquí puedes gestionar todo el sistema.</p>
    <a href="dashboard.php">Volver al Dashboard</a>
    <br>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>