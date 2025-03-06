document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    // Validación de usuario y contraseña
    if (username === 'admin' && password === 'admin123') {
        errorMessage.textContent = '';
        window.location.href = 'admin.html'; // Redirige al panel de administrador
    } else if (username === 'usuario' && password === 'usuario123') {
        errorMessage.textContent = '';
        window.location.href = 'usuario.html'; // Redirige al panel de usuario
    } else {
        errorMessage.textContent = 'Usuario o contraseña incorrectos.';
    }
});