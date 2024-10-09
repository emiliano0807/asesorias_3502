<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo php</title>
</head>
<body>
    <h1>Hola desde HTML</h1>
    <?php
        #Comentario de una linea
        //Otro comentario de una linea
        /*Comentario
        de Multiples Lineas
        */
        #PHP no es tipado es decir no se especifica el tipo de dato de la variable
        #Ademas toda variable siempre comienza con signo de pesos ($)
        $nombre = "Emiliano"; #Todo codigo lleva punto y coma al final
        $edad = 20;
        echo "<h1>Hola Mundo PHP</h1>";
        echo "<h2>Bienvenido " . $nombre . " a PHP</h2>";
        echo "<h3>Tu edad es: $edad </h3>";
    ?>
    <ul>
        <li> <a href="formulario.php">Formulario</a> </li>
    </ul>
</body>
</html>