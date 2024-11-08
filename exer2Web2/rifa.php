<?php 
    if(
        isset ($_POST["premio"]) &&
        isset ($_POST["dataSort"]) &&
        isset ($_POST["valor"]) &&
        isset ($_POST["quantNum"])&&
        !empty ($_POST["premio"]) &&
        !empty ($_POST["dataSort"]) &&
        !empty ($_POST["valor"]) &&
        !empty ($_POST["quantNum"])
    ) {

        // Processamento dos dados

        $premio = ucfirst($_POST["premio"]);
        $valor = (float) $_POST["valor"];
        $quantNum = (int) $_POST["quantNum"];

        $dataSort = $_POST["dataSort"];
        $data = DateTime::createFromFormat("Y-m-d", $dataSort);
        $dataSortFormatada = $data->format("d/m/Y");

        

    }