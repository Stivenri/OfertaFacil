<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
   </head>
   <body>
    <!-- Encabezado -->
      
        <header class="header"> 
            
        <nav class="nav-menu">
            <div class="logo">
            <li><img src="images/logo.JPG" alt="Logo OfertaFacil">
            <a href="#">INICIO -</a>
            <a href="#">CATEGORIA -</a>
            <a href="#">SUBASTA -</a>
            <a href="#">TRUEQUES -</a>
            <a href="#">AYUDA/PQR -</a>
            <a href="#">MIS COMPRAS</a>
        </nav>
        <div class="search-container">
            <a href="#">Ubicación</a>
            <input type="text" placeholder="Busca...">
            <button type="button">🔍</button>
        </div>
        <div class="auth-links">
            <a href="#">Iniciar_Sesión</a>
            
        </div>
    </header>

<!-- Contenido de registro -->
    <div class="container">
            <div class="form-container">
            <h1>Crear una cuenta</h1>
            <form action="php/registro_usuario_be.php" method="POST">
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstName">Nombre</label>
                        <input type="text" id="firstName" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="input-box">
                        <label for="lastName">Apellido</label>
                        <input type="text" id="lastName" name="apellido" placeholder="Apellido" required>
                    </div>
                </div>
                <div class="input-box">
                    <label for="birthdate">Fecha de nacimiento</label>
                    <input type="date" id="birthdate" name="fechaNacimiento" required>
                </div>
                <div class="input-box">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <label for="password">Contraseña *</label>
                    <input type="password" id="password" name="contraseña" placeholder="Contraseña" required>
                </div>
                <button type="submit">Registrar</button>
            </form>
        </div>
        <div class="image-container"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>