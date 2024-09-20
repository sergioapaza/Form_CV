<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "", "cv_dinamico");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $pais = $_POST['pais'];
    $idiomas = $_POST['idiomas'];
    $aptitudes = $_POST['aptitudes'];
    $habilidades = $_POST['habilidades'];
    $intereses = $_POST['intereses'];
    $perfil = $_POST['perfil'];
    $experiencia = $_POST['experiencia'];
    $formacion = $_POST['formacion'];

    // Guardar los datos en la tabla
    $sql = "INSERT INTO cv (nombre, telefono, email, pais, idiomas, aptitudes, habilidades, intereses, perfil, experiencia, formacion) 
            VALUES ('$nombre', '$telefono', '$email', '$pais', '$idiomas', '$aptitudes', '$habilidades', '$intereses', '$perfil', '$experiencia', '$formacion') 
            ON DUPLICATE KEY UPDATE
            nombre='$nombre', telefono='$telefono', email='$email', pais='$pais', idiomas='$idiomas', aptitudes='$aptitudes', habilidades='$habilidades', intereses='$intereses', perfil='$perfil', experiencia='$experiencia', formacion='$formacion'";

    if ($conexion->query($sql) === TRUE) {
        echo "CV actualizado correctamente";
    } else {
        echo "Error al actualizar el CV: " . $conexion->error;
    }

    $conexion->close();
}
?>
