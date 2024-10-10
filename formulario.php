<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <section>
        <h1>Formulario con PHP</h1>
        <form action="procesar-form.php" method="post">
            <input type="text" name="txtNombre" placeholder="Nombre">
            <input type="number" name="txtEdad" placeholder="Edad">
            <select name="selectCarrera" size="1">
                <option value="no">--Seleccione Carrera--</option>
                <option value="sistemas">Ing.Sistemas Computacionales</option>
                <option value="meca">Ing.Mectranocica</option>
                <option value="industrial">Ing.Industrial</option>
                <option value="logis">Ing.Logística</option>
                <option value="metanfe">Ing. Quimica</option> 
            </select>
            <input type="email" name="txtCorreo" placeholder="Correo">
            <input type="password" name="txtPassword" placeholder="Contraseña">
            <button type="submit">Registrar Alumno</button>
            <button type="reset">Nuevo Registro</button>
        </form>
</body>
</html>