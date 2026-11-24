<?php

$rota = $_GET["rota"] ?? "";
$metodo = $_SERVER["REQUEST_METHOD"];

if ($rota === "usuario") {

    switch ($metodo) {
        case "POST":
            createUsuario($con);
            break;

        case "GET":
            readUsuario($con);
            break;

        case "PUT":
            updateUsuario($con);
            break;

        case "DELETE":
            deleteUsuario($con);
            break;

        default:
            echo json_encode(["erro" => "Método inválido!"]);
    }

} else if ($rota === "publicacao") {

    switch ($metodo) {
        case "POST":
            createPublicacao($con);
            break;

        case "GET":
            readPublicacao($con);
            break;

        default:
            echo json_encode(["erro" => "Método inválido!"]);
    }

} else if ($rota === "curtida") {

    switch ($metodo) {
        case "POST":
            createCurtida($con);
            break;

        case "GET":
            readCurtida($con);
            break;

        default:
            echo json_encode(["erro" => "Método inválido!"]);
    }

} else {
    echo json_encode(["erro" => "Rota não encontrada!"]);
}

?>
