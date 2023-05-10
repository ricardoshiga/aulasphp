<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento usando método POST</h1>
    <hr>
    <?php 

    /* Se o campo nome OU email estiverem vazios */
    if( empty($_POST["nome"]) || empty($_POST["email"]) ) {
        ?>
        <p style="color: red;">Você deve preencher nome e e-mail!</p>

        <?php
    } else {
        ?>

    <!-- ARRAY SUPERGLOBAL $_GET ==> 
    é uma array ja existente na linguagem, responsavel por armazenar dados transmitidos via metodo GET. 
    Cada dado, fica em uma chave associativa dentro do array. Esta chave é o nome do campo do formulario.  -->
        
    <!-- Capturar individualmente os dados dos campos do formulário -->
    
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    ?>

    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>

        <!-- Verificando de o campo ASSUNTO não está vazio -->
        <?php if( !empty($assunto) ){?>
        <!-- Verificando de o campo ASSUNTO não está vazio -->
        <li>Assunto: <?=$assunto?></li>
            <?php }?>
         <!-- Verificando de o campo ASSUNTO não está vazio -->   
        <?php if( !empty($mensagem)){?>
        <!-- Verificando de o campo ASSUNTO não está vazio -->
        <li>Mensagem: <?=$mensagem?></li>
        <?php }?>

    </ul>
    <?php
} //Final do if/else de nome e email
?>


</body>
</html>