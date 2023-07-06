<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    // Validar los datos antes de enviar el correo
    if ($nombre === '' || $correo === '' || $telefono === '') {
        http_response_code(400); // Solicitud incorrecta
        exit('Por favor, completa todos los campos.');
    }

    // Validar el formato del correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400); // Solicitud incorrecta
        exit('Por favor, ingresa un correo electrónico válido.');
    }

    // Enviar el correo
    $destinatarios = array(
        'contacto@luvora.com.mx', // Destinatario 1
        'walter@luvora.com.mx', // Destinatario 2 (reemplaza con la dirección de correo real)
        'samer@luvora.com.mx'  // Destinatario 3 (reemplaza con la dirección de correo real)
    );
    $asunto = 'Datos de prospecto PRANA';
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo electrónico: $correo\n";
    $mensaje .= "Teléfono: $telefono\n";

    foreach ($destinatarios as $destinatario) {
        if (!mail($destinatario, $asunto, $mensaje)) {
            http_response_code(500); // Error en el servidor
            exit('Hubo un error al enviar el correo. Por favor, intenta nuevamente más tarde.');
        }
    }

    // Descargar el PDF
    $rutaPDF = 'brochure_PRANA.pdf';
    if (file_exists($rutaPDF)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="brochure_PRANA.pdf"');
        readfile($rutaPDF);
        exit();
    } else {
        http_response_code(500); // Error en el servidor
        exit('El PDF no está disponible para descarga en este momento.');
    }
} else {
    http_response_code(405); // Método no permitido
    exit('Método no permitido.');
}
?>
