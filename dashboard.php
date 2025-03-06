<?php
require 'includes/auth.php';

if (!isLoggedIn()) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
    <?php if (isAdmin()): ?>
        <p>Eres un administrador. Tienes acceso a todo.</p>
        <a href="admin.php">Ir al Panel de Administración</a>
    <?php else: ?>
        <p>Eres un usuario normal. Tu acceso es limitado.</p>
    <?php endif; ?>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>