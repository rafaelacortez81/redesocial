<?php

function inserirUsuario($con, $dados){
    $stmt = $con->prepare(
        "INSERT INTO USUARIO (nome, username, email, senha)
        VALUES (?,?,?,?) "
        );
    $stmt -> execute([  $dados["nome"],
                        $dados["username"],
                        $dados["email"],
                        $dados["senha"],]);
    return $con->lastInsertId();
}
//READ
function listarUsuario($con){
    $stmt = $con->query("SELECT * FROM usuarios");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//UPDATE
function updateUsuario($con, $id, $dados){
    $stmt = $con->prepare(
        "UPDATE usuarios Set senha = ? WHERE id_usuario = ?");
        $stmt -> execute([$dados["senha"],$id]);
}
//DELETE
function removerUsuario($con, $id){
    $stmt = $con->prepare(
        "DELETE FROM usuarios WHERE id_usuario = ?" );
        $stmt->execute([$id]);
}