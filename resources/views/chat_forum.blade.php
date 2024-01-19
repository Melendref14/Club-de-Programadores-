<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUPSM | Foro de Chat</title>
    <!-- Enlaces a Bootstrap y estilos personalizados -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: #14213d;
        }
        .flex-grow-1 {
            flex-grow: 1;
        }
        .navbar {
            background-color: #f77f00; 
        }
        .navbar img {
            max-height: 40px; 
        }
        .card {
            background-color: #6c757d;
            border: none; /* Elimina el borde predeterminado */
            border-radius: 10px; /* Ajusta la curvatura de las esquinas */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.5); /* Añade una sombra */
        }
        footer{
            background-color: #6c757d; 
        }
        .card-img-top {
            max-height: 150px; 
            object-fit: contain; /* Ajusta la relación de aspecto */
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }
        .chat-input-section {
            background-color: #6c757d;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .chat-messages-section {
            background-color: #6c757d;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            max-height: 300px;
            overflow-y: auto;
        }
        .message {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img src="images/logoIupsm.png" alt="Logo del Club" class="navbar-brand mr-2"> 
        <a class="navbar-brand" href="#">IUPSM | Foro de Chat</a>
        <a href="{{ url('/') }}" class="btn btn-outline-light ml-auto">Volver al Home</a>
    </nav>

    <div class="container-fluid mt-4 flex-grow-1">
        <!-- Secciones lado a lado -->
        <div class="row">
            <div class="col-md-6">
                <div class="card text-white chat-input-section">
                    <h2 class="card-title text-center mb-4">Escribe tu mensaje</h2>
                    <form>
                    @csrf
                        <div class="form-group">
                            <label for="message">Mensaje:</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white chat-messages-section">
                    <h2 class="card-title text-center mb-4">Mensajes del Foro</h2>
                    <div class="message">
                        <strong>Usuario 1:</strong> ¡Hola! ¿Alguien tiene dudas sobre programación?
                    </div>
                    <div class="message">
                        <strong>Usuario 2:</strong> Sí, tengo una pregunta sobre JavaScript.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center py-3">
        <p>¡Bienvenido al Foro de Chat! Resuelve tus dudas y comparte conocimientos.</p>
    </footer>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
