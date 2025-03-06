<?php
session_start();

// Credenciales hardcodeadas (solo para pruebas)
$users = [
    'admin' => [
        'password' => 'admin123', // Contraseña para admin
        'role' => 'admin' // Rol de admin
    ],
    'usuario' => [
        'password' => 'user123', // Contraseña para usuario
        'role' => 'user' // Rol de usuario
    ]
];

function login($username, $password) {
    global $users;

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username]['role'];
        return true;
    }
    return false;
}

function isLoggedIn() {
    return isset($_SESSION['username']);
}

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function logout() {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>