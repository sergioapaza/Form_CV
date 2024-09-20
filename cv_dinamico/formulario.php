<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar CV</title>
</head>
<body>
    <h1>Formulario para actualizar el CV</h1>
    <form action="guardar_cv.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br><br>

        <h3>Idiomas</h3>
        <textarea id="idiomas" name="idiomas" rows="4" cols="50"></textarea><br><br>

        <h3>Aptitudes</h3>
        <textarea id="aptitudes" name="aptitudes" rows="4" cols="50"></textarea><br><br>

        <h3>Habilidades</h3>
        <textarea id="habilidades" name="habilidades" rows="4" cols="50"></textarea><br><br>

        <h3>Otros intereses</h3>
        <textarea id="intereses" name="intereses" rows="4" cols="50"></textarea><br><br>

        <h3>Perfil</h3>
        <textarea id="perfil" name="perfil" rows="4" cols="50"></textarea><br><br>

        <h3>Experiencia Laboral</h3>
        <textarea id="experiencia" name="experiencia" rows="4" cols="50"></textarea><br><br>

        <h3>Formación</h3>
        <textarea id="formacion" name="formacion" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Actualizar CV">
    </form>
</body>
</html>
