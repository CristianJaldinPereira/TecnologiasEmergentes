document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    // Validación de usuario y contraseña
    if (username === 'admin' && password === 'admin123') {
        errorMessage.textContent = '';
        alert('Bienvenido, administrador.');
        // Redirigir o realizar otras acciones para el admin
    } else if (username === 'usuario' && password === 'usuario123') {
        errorMessage.textContent = '';
        alert('Bienvenido, usuario.');
        // Redirigir o realizar otras acciones para el usuario
    } else {
        errorMessage.textContent = 'Usuario o contraseña incorrectos.';
    }
});