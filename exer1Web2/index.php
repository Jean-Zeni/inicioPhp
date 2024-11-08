<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultório da Dra. Bolota</title>
</head>
<body>
    
    <h1>Consultório da Dra. Bolota</h1>

    <form method="POST" action="./script.php">
        <label for="nome">Nome Completo:</label><br>
        <input type="text" name="nome" id="nome"><br>

        <br><label for="dataNasc">Data de Nascimento:</label><br>
        <input type="date" name="dataNasc" id="dataNasc"><br>

        <br><label for="peso">Peso:</label><br>
        <input type="number" name="peso" id="peso" step="0.01"><br>

        <br><label for="altura">Altura:</label><br>
        <input type="number" name="altura" id="altura" step="0.01"><br>
        
        <br><label for="sexo">Sexo:</label>
        <br><input type="radio" name="sexo" value="masculino" id="sexo">
        <label for="sexo">Masculino</label>
        <input type="radio" name="sexo" value="feminino" id="sexo"> 
        <label for="sexo">Feminino</label><br>

        <br><input type="submit" value="Enviar">
        <input type="reset" value="Limpar">

    </form>

</body>
</html>