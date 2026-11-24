<?php
require_once __DIR__ . "/../models/PublicacaoModel.php";

function createPublicacao($con) {
    inserirPublicacao($con);
}

function readPublicacao($con) {
    listarPublicacoes($con);
}

?>
