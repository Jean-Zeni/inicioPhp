<?php
    $nome = "Jean";
    $sobre = "Pereira";
    $idade = 17;
    $altura = 1.68;
    $peso = 59.90;
    $imc = $peso / pow($altura, 2);

    echo"Nome: $nome<br>Sobrenome: $sobre<br> Idade: $idade<br> Altura: $altura<br> Peso: " .number_format($peso, 2)."<br> IMC:" .number_format($imc, 2);