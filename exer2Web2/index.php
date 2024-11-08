<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Rifa</title>
</head>
<body>
    
    <header>
        <h1>Gerador de Rifa</h1>
    </header>

    <main>
        <form method="POST" action="./rifa.php">

            <label for="premio">Prêmio: </label><br>
            <input type="text" name="premio" id="premio"><br>

            <br><label for="dataSort">Data do Sorteio: </label><br>
            <input type="date" name="dataSort" id="dataSort"><br>

            <br><label for="valor">Valor:</label><br>
            <input type="number" name="valor" id="valor" step="0.01"><br>

            <br><label for="quantNum">Quantidade de números:</label><br>
            <br><input type="number" name="quantNum" id="quantNum"><br>

            <br>
            <input type="submit" value="Gerar">
            <input type="reset" value="limpar">

        </form>
    </main>

</body>
</html>