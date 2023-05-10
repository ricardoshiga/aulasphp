<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Formulário</title>
</head>

<body>
    <h1>Exercício 04 - Formulário</h1>
    <hr>

    <form action="exercicio04-dados.php" method="POST">
    <p>
        <label for="email">Nome do produto:</label>
        <input required type="nome-do-produto" name="nome-do-produto" id="nome-do-produto">
    </p>

    <p>
        <label for="fabricante">Fabricante:</label>
        <select name="fabricante" id="fabricante">

            <option>Dell</option>
            <option>LG</option>
            <option>HP</option>
            <option>Positivo</option>
        </select>
    </p>

    <p>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="" min="100" max="10000" step="0.01">
    </p>

    <p>
    <label for="descricao">Descrição:</label>
    </p><p>
    <textarea name="descricao" id="" cols="30" rows="10"></textarea>
    </p>
  

    <button type="submit" name="enviar">Enviar dados</button>
</form>
</body>

</html>