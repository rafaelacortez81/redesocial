<?php

function inserirCurtida($con) {

    $id_usuario = $_POST["id_usuario"] ?? null;
    $id_publicacao = $_POST["id_publicacao"] ?? null;

    $sql = "INSERT INTO curtidas (id_usuario, id_publicacao)
            VALUES (:id_usuario, :id_publicacao)";

    $stmt = $con->prepare($sql);

    $stmt->bindParam(":id_usuario", $id_usuario);
    $stmt->bindParam(":id_publicacao", $id_publicacao);

    if ($stmt->execute()) {
        echo json_encode(["mensagem" => "Curtida registrada!"]);
    } else {
        echo json_encode(["erro" => "Erro ao registrar curtida"]);
    }
}

function listarCurtidas($con) {

    $sql = "SELECT * FROM curtidas";

    $stmt = $con->prepare($sql);
    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resultado);
}

?>
