<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formuario</title>
</head>
<body>
    <ul>
    <?php
    #Recibimos los datos del formulario
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    echo "<li>Nombre: $nombre</li>";
    echo "<li>Edad: $edad</li>";

    ?>
    </ul>
</body>
</html>