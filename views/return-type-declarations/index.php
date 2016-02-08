<head>
    <title>Novidades PHP 7 - Return Type Declarations</title>
</head>

<body>
    <div class="container">
        <div class="cabecalho">
            <?php include'views/partials/header.php'; ?>
        </div>

        <div class="corpo">
            <h1>Return Type Declarations</h1>
            <p>
                Assim como o scalar type hints (para variáveis), podemos definir também o tipo de retorno de uma função.
                Obrigando o desenvolvedor depois do comando <i>return</i> fazer um retorno de valor no tipo definido. Os
                tipos que podem ser utilziados são: int, float, string e bool.
            </p>
            <p>
                Abaixo um exemplo de um método utilizando o return type declarations, a seguir forçando um erro de tipo no
                método seguinte.
            </p>

            <?php

                //Função sem tipo de retorno definido...
                echo '<h3>Retorno com tipo NÃO DEFINIDO</h3>';

                function mensagemNaoTipada($a)
                {
                    return $a;
                }

                echo 'Retorno da função soma(1): '.mensagemNaoTipada(1).'<br/>';
                echo 'Retorno da função soma(a): '.mensagemNaoTipada('a').'<br/>';

                //Função com tipo de retorno definido...
                echo '<h3>Retorno com tipo DEFINIDO</h3>';

                function mensagemTipada($a) : int
                {
                    return $a;
                }

                echo 'Retorno da função soma(1): '.mensagemTipada(1).'<br/>';
                echo 'Retorno da função soma(a): '.mensagemTipada('a').'<br/>';

            ?>

        </div>

        <div class="footer">
            <?php include'views/partials/footer.php'; ?>
        </div>
    </div>
</body>