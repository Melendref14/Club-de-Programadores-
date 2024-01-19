<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUPSM | Club de Programadores</title>
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
            box-shadow: 0 6px 8px rgba(0, 0, 0, 5.0); /* Sombreado en los bordes */
            margin-bottom: 20px; /* Márgenes entre las secciones */
        }
        footer{
            background-color: #6c757d; 
            margin-top: 20px; /* Márgenes entre el contenido y el footer */
        }
        .card-img-top {
            max-height: 150px; 
            object-fit: contain; /* Ajusta la relación de aspecto */
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }
        .card-title {
            text-align: center; /* Centra el texto */
            margin-top: 10px; 
        }
        .actividad-img {
            max-height: 200px; 
            object-fit: cover; /* Ajusta la relación de aspecto y cubre el espacio */
            margin: 0 auto; /* Centra la imagen horizontalmente */
            box-shadow: 0 6px 8px rgba(0, 0, 0, 5.0); /* Sombreado en los bordes */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img src="images/logoIupsm.png" alt="Logo del Club" class="navbar-brand mr-2">
        <a class="navbar-brand">IUPSM | Club de Programadores</a>
    </nav>

    <div class="container-fluid mt-4 flex-grow-1">
        <!-- Secciones lado a lado -->
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white">
                    <div class="card-body">
                        <h2 class="card-title text-center">Actividades Recientes</h2>
                        <img src="images/actividad1.png" alt="Actividad 1" class="card-img-top actividad-img">
                        <p class="card-text mt-3">Descripción breve de la Actividad 1</p>
                        <img src="images/actividad2.png" alt="Actividad 2" class="card-img-top actividad-img">
                        <p class="card-text mt-3">Descripción breve de la Actividad 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-white">
                    <div class="card-body">
                        <h2 class="card-title text-center">Desarrolladores del Club</h2>
                        <img src="images/userIcon.png" class="card-img-top" alt="Desarrollador 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nombre del Desarrollador 1</h5>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 text-white">
                    <div class="card-body">
                        <img src="images/userIcon.png" class="card-img-top" alt="Desarrollador 2">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Desarrollador 2</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white">
                    <div class="card-body">
                        <h2 class="card-title text-center">Foro de Discusión</h2>
                        <p class="card-text">Únete a nuestras discusiones emocionantes en el foro.</p>
                        <a href="{{ route('chat.index') }}" class="btn btn-primary">Ir al Foro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer (Foro) -->
    <footer class="text-white text-center py-3">
        <p>¡Participa en nuestro foro de discusión y resuelve tus dudas de programación!</p>
    </footer>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
