<?php

function inserirPublicacao($con) {

    $id_usuario = $_POST["id_usuario"] ?? null;
    $conteudo = $_POST["conteudo"] ?? null;

    $sql = "INSERT INTO publicacoes (id_usuario, conteudo)
            VALUES (:id_usuario, :conteudo)";

    $stmt = $con->prepare($sql);

    $stmt->bindParam(":id_usuario", $id_usuario);
    $stmt->bindParam(":conteudo", $conteudo);

    if ($stmt->execute()) {
        echo json_encode(["mensagem" => "Publicação criada!"]);
    } else {
        echo json_encode(["erro" => "Erro ao criar publicação"]);
    }
}

function listarPublicacoes($con) {

    $sql = "SELECT * FROM publicacoes";

    $stmt = $con->prepare($sql);
    $stmt->execute();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resultado);
}

?>
