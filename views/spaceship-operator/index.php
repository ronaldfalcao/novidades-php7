<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 10/01/2016
 * Time: 11:49
 */
?>
    <head>
        <title>Novidades PHP 7 - Spaceship Operator</title>
    </head>

    <body>
        <div class="cabecalho">
            <?php include'views/partials/header.php'; ?>
        </div>

        <div class="corpo">
            <h1>Spaceship Operator - Operador Espaçonave(?)</h1>
            <p>
                Particularmente demorei para entender porque o nome de spaceship, mas depois de algum tempo utilziando
                percebi a "semelhança" que um abre-fecha (menor-maior)com um igual entre eles tinha com uma espaçonave.
                Semelhanças a parte agora é hora de entender um pouco sobre o novo operador do PHP 7.
            </p>
            <p>
                Não temos grandes explicações ainda no PHP.net, apenas uma breve descrição na página de operadores <a href="http://php.net/manual/en/language.operators.comparison.php" title="language.operators.comparison">language.operators.comparison</a>
                . Mas na lista de discussão RFC (Request for comments)
                do PHP.Net temos mais explicações <a href="https://wiki.php.net/rfc/combined-comparison-operator" title="combined-comparison-operator">combined-comparison-operator</a>.
            </p>
            <p>
                Abaixo um exemplo simples do uso e dos resultados obtidos com o operador.
            </p>


            <?php
                echo '<p>Comparando A e B, sendo B maior do que A:</p>'.'<br/>';
                echo '<ul class="list-group">';
                echo '<li class="list-group-item">A <=> B: '.(1 <=> 2).'<span class="badge">B maior do que A</span></li>';
                echo '<li class="list-group-item">B <=> A: '.(2 <=> 1).'<span class="badge">B menor do que A</span></li>';
                echo '<li class="list-group-item">A <=> A: '.(1 <=> 1).'<span class="badge">A igual A</span></li>';
                echo '</ul>';
            ?>

        </div>

        <div class="footer">
            <?php include'views/partials/footer.php'; ?>
        </div>
    </body>

