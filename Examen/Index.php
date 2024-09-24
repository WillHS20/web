<!DOCTYPE html>
<html lang="es">

<style type="text/css">
    
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header {
    text-align: center;
    padding: 20px 0;
    background-color: #4CAF50;
    color: white;
}

.section {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

#datos-personales {
    background-color: #FFEBEE; /* Rosa pastel */
}

#curriculo-vitae {
    background-color: #E3F2FD; /* Azul pastel */
}

#gustos-personales {
    background-color: #E8F5E9; /* Verde pastel */
}

#redes-sociales {
    background-color: #FFF3E0; /* Naranja pastel */
}

#videos-musica {
    background-color: #F3E5F5; /* Morado pastel */
}

#escolaridad {
    background-color: #FFF9C4; /* Amarillo pastel */
}

#lugares-visitados {
    background-color: #D1C4E9; /* Lila pastel */
}

#pasatiempos {
    background-color: #C8E6C9; /* Verde claro pastel */
}

.section h2 {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    margin: -20px -20px 20px -20px;
    border-radius: 8px 8px 0 0;
}

.section p {
    line-height: 1.6;
}

a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

#secreto {
    display: none;
    margin-top: 20px;
    padding: 20px;
    background-color: #FFEB3B; /* Amarillo pastel */
    border: 1px solid #ddd;
    border-radius: 8px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Personal</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bienvenido a Mi Rincón Personal</h1>
        </div>
        <?php
        include 'Secciones.php';
        cargarSeccion('datos-personales');
        cargarSeccion('escolaridad');
        cargarSeccion('curriculo-vitae');
        cargarSeccion('gustos-personales');
        cargarSeccion('lugares-visitados');
        cargarSeccion('pasatiempos');
        cargarSeccion('redes-sociales');
        cargarSeccion('videos-musica');
        ?>
        <div id="secreto">
            <h2>Video Secreto</h2>
            <video width="320" height="240" controls>
                <source src="LeyMilo.mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
        </div>
    </div>
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && event.altKey && event.key === 'S') {
                document.getElementById('secreto').style.display = 'block';
            }
        });
    </script>
    </div>
</body>
</html>


