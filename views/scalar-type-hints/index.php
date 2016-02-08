<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 11/01/2016
 * Time: 14:31
 */
?>

<head>
    <title>Novidades PHP 7 - Indução de tipo escalar</title>
</head>

<body>
    <div class="container">
        <div class="cabecalho">
            <?php include'views/partials/header.php'; ?>
        </div>

        <div class="corpo">
            <h1>Scalar type hints (Indução de tipo escalar)</h1>
            <p>
                Uma das grandes questões do PHP é a forma com que ele lida com variáveis.
            </p>
            <p>
                Linguagens como o C# e o Java são ditas fortemente tipadas, ou seja, os tipos são definidos e acompanham
                todo o ciclo de vida da variável. Já o PHP e o JavaScript são linguages fracamente tipadas e uma variável
                em seu ciclo de vida pode abrigar diversos tipos de valores escalares.
            </p>
            <p>
                Com o scalar types hints o desenvolvedor PHP pode fixar um tipo para a sua variável. Isso já era possúvel
                em versões 5.x do PHP utilizando: <i>declare(strict_types=1);</i>
            </p>
            <p>
                Abaixo um exemplo do retorno, a terceira chamada vai apresentar um erro fatal porque estou passando uma string
                de parâmetro e não um float como exigido:
            </p>

            <?php

                //Definindo um valor float para a variável...
                $mensagem = "Olá Mundo";

                //Definindo as funções não tipada e tipada...
                function mensagemNaoTipada($msg){
                    echo 'Mensagem não tipada: ' .$msg. '<br/>';
                }

                function mensagemTipada(float $msg){
                    echo 'Mensagem tipada: ' .$msg.'<br/>';
                }

                //Chamando a mensagem tipada com o tipo certo
                mensagemTipada(1.1);

                //Chamando as funções...
                mensagemNaoTipada($mensagem);
                mensagemTipada($mensagem);
            ?>

        </div>

        <div class="footer">
            <?php include'views/partials/footer.php'; ?>
        </div>
    </div>
</body>
