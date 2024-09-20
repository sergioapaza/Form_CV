<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "cv_dinamico");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del CV
$sql = "SELECT * FROM cv LIMIT 1";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
} else {
    echo "No hay datos disponibles.";
    exit;
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vitae - <?php echo $fila['nombre']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cv-container">
        <header>
            <h1><?php echo $fila['nombre']; ?></h1>
            <h2><?php echo $fila['perfil']; ?></h2>
        </header>

        <div class="main-content">
            <div class="left-column">
                <section class="contacto">
                    <h3>CONTACTO</h3>
                    <ul>
                        <li>Teléfono: <?php echo $fila['telefono']; ?></li>
                        <li>Email: <?php echo $fila['email']; ?></li>
                        <li>País: <?php echo $fila['pais']; ?></li>
                    </ul>
                </section>

                <section class="idiomas">
                    <h3>IDIOMAS</h3>
                    <p><?php echo nl2br($fila['idiomas']); ?></p>
                </section>

                <section class="aptitudes">
                    <h3>APTITUDES</h3>
                    <p><?php echo nl2br($fila['aptitudes']); ?></p>
                </section>

                <section class="habilidades">
                    <h3>HABILIDADES</h3>
                    <p><?php echo nl2br($fila['habilidades']); ?></p>
                </section>

                <section class="intereses">
                    <h3>OTROS INTERESES</h3>
                    <p><?php echo nl2br($fila['intereses']); ?></p>
                </section>
            </div>

            <div class="right-column">
                <section class="perfil">
                    <h3>PERFIL</h3>
                    <p><?php echo nl2br($fila['perfil']); ?></p>
                </section>

                <section class="experiencia">
                    <h3>EXPERIENCIA LABORAL</h3>
                    <p><?php echo nl2br($fila['experiencia']); ?></p>
                </section>

                <section class="formacion">
                    <h3>FORMACIÓN</h3>
                    <p><?php echo nl2br($fila['formacion']); ?></p>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
