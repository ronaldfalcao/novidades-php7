<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 11/01/2016
 * Time: 14:31
 */
?>

<head>
    <title>Novidades PHP 7 - Spaceship Operator</title>
</head>

<body>
    <div class="container">
        <div class="cabecalho">
            <?php include'views/partials/header.php'; ?>
        </div>

        <div class="corpo">
            <h1>Null coalesce operator</h1>
            <p>
                Para saber se uma variável foi definida usamos até então a função <i>isset()</i>. Agora com o
                null coalesce operator(??) o código fica mais limpo.
            </p>
            <p>
                No exemplo usamos primeiro a função <i>isset()</i> com um o operador ternário para verificar a existência
                de uma variável. Caso ela seja declarada $retorno recebe seu valor e caso ela não exista será atribuído o valor 0.
            </p>

            <?php

                //Para testar a variável sem declaração basta comentar o código abaixo...
                $variavelTeste = 10;

                echo '<h3>Com isset()</h3>';
                $retorno = (isset($variavelTeste)) ? $variavelTeste : 0;
                echo '$retorno = '.$retorno.'<br/>';

                //Caso a variável não esteja declarada vai ser apresentado um erro nessa chamada...
                echo '$variavelTeste = '.$variavelTeste.'<br/>';

                echo '<h3>Com Null coalesce operator</h3>';
                $retorno = $variavelTeste ?? 0;
                echo '$retorno = '.$retorno.'<br/>';

                //Caso a variável não esteja declarada vai ser apresentado um erro nessa chamada...
                echo '$variavelTeste = '.$variavelTeste.'<br/>';

            ?>

        </div>

        <div class="footer">
            <?php include'views/partials/footer.php'; ?>
        </div>
    </div>
</body>
