<?php
if (isset($_FILES['imagen'])) {
    $nombreArchivo = $_FILES['imagen']['name'];
    $rutaTemporal = $_FILES['imagen']['tmp_name'];

    $rutaDestino = 'carpeta_destino/' . $nombreArchivo;

    if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
        echo "La imagen se ha subido correctamente.<br>";
        echo "<img src='$rutaDestino' alt='Imagen subida'>";
    } else {
        echo "Hubo un error al subir la imagen.";
    }
} else {
    echo "No se ha seleccionado ninguna imagen.";
}
?>