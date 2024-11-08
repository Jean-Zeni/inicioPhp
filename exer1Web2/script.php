<?php
    if(
        isset ($_POST["nome"]) &&
        isset ($_POST["dataNasc"]) &&
        isset ($_POST["peso"]) &&
        isset ($_POST["altura"]) &&
        isset ($_POST["sexo"]) &&
        !empty ($_POST["nome"]) &&
        !empty ($_POST["dataNasc"]) &&
        !empty ($_POST["peso"]) &&
        !empty ($_POST["altura"]) &&
        !empty ($_POST["sexo"])
    ){
        //processamento dos dados

        $nome = ucfirst($_POST["nome"]);

        //calcula imc
        $peso = (float) $_POST["peso"];
        $altura = (float) $_POST["altura"];
        $dataNasc = $_POST["dataNasc"];
        $sexo = $_POST["sexo"];

        $imc = $peso / pow ($altura, 2);

        //verifica o imc
        if($imc >= 0 && $imc < 18.5) {
            $resultado = "Abaixo do peso";
        } else if ($imc >= 18.5 && $imc < 24.9) {
            $resultado = "Peso normal";
        } else if ($imc >= 24.9 && $imc < 29.9) {
            $resultado = "Obesidade I";
        } else if ($imc >= 29.9) {
            $resultado = "Obesidade II";
        } else {
            $resultado = "O valor digitado não é aceito";
        }

        //Define sexo
        if ($sexo == "masculino") {
            $sr = "Sr.";
        } else if ($sexo == "feminino") {
            $sr = "Sra.";
        } else {
            $sr = "";
        }

        //calcula a idade
        $data = new DateTime($dataNasc);
        $dataAtual = new DateTime();
        $idade = $data -> diff($dataAtual) -> y;

        //Saída de dados
        echo "$sr $nome<br>
        Idade: $idade<br>
        IMC: $resultado";
    }