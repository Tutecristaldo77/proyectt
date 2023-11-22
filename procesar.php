<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["email"];
    $comentarios = $_POST["Comentarios"];
    $fundacionONG = $_POST["FundacionONG"];

    $respuesta = ["mensaje" => "¡Formulario recibido con éxito!"];
    echo json_encode($respuesta);

} else {
    http_response_code(400);
    echo json_encode(["error" => "Solicitud no válida"]);
}
?>