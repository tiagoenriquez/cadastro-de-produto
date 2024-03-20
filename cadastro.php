<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa da Tecnologia</title>
    <script>
        function validarValor(event) {
            const valorDigitado = event.target.value;
            const ultimoDigito = valorDigitado[valorDigitado.length - 1];
            if (!'0123456789,'.includes(ultimoDigito) || (valorDigitado.match(/,/g) || []).length > 1) {
                document.getElementById('valor').value = '';
            }
        }
    </script>
</head>
<body>
    <h1>Cadastro de produto</h1>
    <p>Inclua as informações do produto abaixo.</p>
    <form action="cadastrar.php" method="post">
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="descricao">Descrição do produto</label>
        <input type="text" name="descricao" id="descricao"><br><br>
        <label for="valor">Valor do produto</label>
        <input type="text" name="valor" id="valor" onkeyup="validarValor(event)" required><br><br>
        <label for="fornecedor">Fornecedor</label>
        <input type="text" name="fornecedor" id="fornecedor" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>