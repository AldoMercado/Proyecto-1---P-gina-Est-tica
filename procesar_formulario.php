<?php
// Verificar si se reciben datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['mensaje'];
    echo "¡Formulario enviado con éxito!";
} else {
    // Si no se recibe una solicitud POST, muestra un mensaje de error
    echo "Error: No se recibieron datos del formulario.";
}
?>
