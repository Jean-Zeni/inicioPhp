<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    
    <form action="../exemplo/processa_formulario.php" method="post">

        <input type="text" name="nome" id="nome" placeholder="Informe o nome">
        <input type="password" name="senha" id="senha">
        <input type="number" name="idade" id="idade">
        <input type="number" step="0.01" name="altura" id="altura">
        <input type="email" name="email" id="email">
        <input type="url" name="site" id="site">
        <input type="date" name="dataNasc" id="dataNasc">
        <input type="submit" value="Salvar" name="salvar" id="salvar">
        <input type="reset" value="Limpar" name="limpar" id="limpar">
    </form>

</body>
</html>