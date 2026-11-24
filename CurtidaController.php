<?php

require_once __DIR__ . "/../models/CurtidaModel.php";

function createCurtida($con) {
    inserirCurtida($con);
}

function readCurtida($con) {
    listarCurtidas($con);
}

?>
