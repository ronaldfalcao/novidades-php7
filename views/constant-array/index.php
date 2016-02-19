<head>
    <title>Novidades PHP 7 - Home</title>
</head>

<body>
    <div class="container">
        <div class="cabecalho">
            <?php include'views/partials/header.php'; ?>
        </div>

        <div class="corpo">
            <h1>Novidades PHP 7 - Constant array</h1>

            <p>
                Agora no PHP 7 é possível criar constantes utilizando o tipo array. Até então só era permitido criar
                constantes utilizando tipos primitivos como int, float, string, etc.
            </p>

            <?php

                //Forma antiga para declarar constantes...
                define ('VALOR_ACELERACAO_GRAVIDADE', 9.8);
                define ('UNIDADE_ACELERACAO_GRAVIDADE','m/s&#178;');

                //Forma melhorada de declarar constantes...
                define('ACELERACAO_GRAVIDADE', [9.8,'m/s&#178;']);


                //Exemplo utilizando a forma antiga de constantes...
                echo '<h2>Exemplo de constante utilizando o tipo primitivo float e string de formas separadas.</h2>';
                echo 'A aceleração da gravidade é: '.VALOR_ACELERACAO_GRAVIDADE.UNIDADE_ACELERACAO_GRAVIDADE;

                //Exemplo utilizando a forma melhorada de constantes...
            echo '<h2>Exemplo de constante utilizando o tipo primitivo float e string de formas separadas.</h2>';
                echo 'A aceleração da gravidade é: '.ACELERACAO_GRAVIDADE[0].ACELERACAO_GRAVIDADE[1];
            ?>

        </div>

        <div class="footer">
            <?php include'views/partials/footer.php'; ?>
        </div>
    </div>
</body>