<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Dados</title>
</head>
<body>
    <h1>Exercício 04 - Dados</h1>
    <hr>
    <?php
    $nome = $_POST["nome-do-produto"];
    $fabricante = $_POST["fabricante"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    
    ?>

    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Fabricante: <?=$fabricante?></li>
        <?php if( !empty($nome) ){?>
        <li>Preço: <?=$preco?></li>
            <?php }?> 
        <?php if( !empty($fabricante)){?>
        <li>Mensagem: </li>
        <?php }?>

    </ul>
    
</html>