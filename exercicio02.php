<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
   <h1>Exercício 02</h1> 
   <?php
   

//    Array dissociativo
   $dados = [
// chave => valor
    "nomeDeUsuario" => "Ricardo",
    "senha" => "1234ri",
    "idade" => 28,
    "cidade" => "Guarulhos"
];

   ?>

<h2>Saída de dados</h2>
    <ol>
        <li><?=$dados["nomeDeUsuario"]?></li>
        <li><?=$dados["idade"]?></li>
        <li><?=$dados["cidade"]?></li>
    </ol>


</body>
</html>