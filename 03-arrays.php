<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays (vetores ou matrizes)</h1>
    <hr>

    <h2>Array com índice numérico</h2>
    <?php
    // Declarando arrays como variáveis
    $bandas = ["Skid Row", "Metallica", "GunsNRores"];
    $cursos = array("HTML5", "PHP", "Design", "JS");

    // Declarando arrays como constantes
    const UNIDADES_SENAC = ["Penha", "Tatuape"];
    define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
    
    ?>

    <h3>Saída de dados arrays</h3>
    <ul>
        <li>Banda que mais gosto: <?=$bandas[0]?></li>
        <li>Assunto estudado: <?=$cursos[1]?></li>
        <li>Estamos no SENAC <?=UNIDADES_SENAC[0]?></li>
        <li>O Sesc é uma colônia de férias <?=UNIDADES_SESC[1]?></li>
    </ul>


    <h3>Array Associativo</h3>
    <?php

    $livros = [
        "titulo" => "Senhor dos Anéis",
        "autor" => "J.J.R. Tolkien",
        "ano" => 1954
    ];
    
    ?>

    <p>Livro: <?=$livro["titulo"]?></p>
    <p>Escrito por: <?=$livro["autor"]?> em <?=$livro["ano"]?>. </p>

<h2>Analisando a estrutura de arrays usando print_r() e var_dump()</h2>
<?=print_r($bandas)?>
<br> <br>
<?=var_dump($bandas)?>

<pre> <?=print_r($bandas)?></pre>
<pre> <?=var_dump($bandas)?></pre>


</body>
</html>