<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (resolvido)</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <?php


    const ALUNA = "Rachel Green";
    $curso = "gastronomia";
    $cargaHoraria = 180;
    $limiteDeFaltas = $cargaHoraria / 4;   

    
    ?>
    <p> <b><?= ALUNA?></b>  é estudante de <b><?= $curso?></b> , sua carga horária é de <b><?= $cargaHoraria?></b>  horas e seu limite de faltas é de <b> <?= $limiteDeFaltas?></b> horas.</p>


</body>
</html>