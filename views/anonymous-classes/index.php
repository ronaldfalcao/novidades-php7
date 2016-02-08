<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 10/01/2016
 * Time: 11:49
 */
?>
    <head>
        <title>Novidades PHP 7 - Anonymous-classes</title>
    </head>

    <body>
        <div class="container">

            <div class="cabecalho">
                <?php include'views/partials/header.php'; ?>
            </div>

            <div class="corpo">
                <h1>Classes anônimas (<i>Anonymous classes</i>)</h1>
                <p>
                    Classes anônimas são uma ferramenta que permite ao desenvolvedor criar suas classes de forma dinâmica, ou seja,
                    durante a execução do código as passando como parâmetro para métodos ou funções do nosso código.
                </p>
                <p>
                    Mais exemplos em informações na página do PHP.net <a href="http://php.net/manual/pt_BR/language.oop5.anonymous.php" title="Classes anônimas">Classes Anônimas</a>.
                </p>
                <p>
                    Segue um exemplo do uso de classes anônimas no PHP 7. A classe Animal tem um construtor que instancia
                    uma classe anônima que recebe dois parâmetros e monta uma mensagem. o método exibeMensagemSomAninal()
                    apenas retorna a mensagem do método somAnimalFaz().
                </p>


                <?php
                    class Animal {

                        private $oquefaz;

                        function __construct($animal, $som){
                            $this->name = new class($animal, $som){
                                private $animal;
                                private $som;

                                function __construct($animal, $som){
                                    $this->animal = $animal;
                                    $this->som = $som;
                                }

                                function somAnimalFaz(){
                                    return 'O animal '.$this->animal.' faz o seguinte som:  '.$this->som.'.<br/>';
                                }
                            };
                        }

                        function exibeMenagemSomAnimal(){
                            return $this->name->somAnimalFaz();
                        }

                    }

                    $meuPetA = new Animal("Gato","Mia");
                    echo $meuPetA->exibeMenagemSomAnimal();

                    $meuPetB = new Animal("Cachorro","Late");
                    echo $meuPetB->exibeMenagemSomAnimal();

                    $meuPetC = new Animal("Tico Francisco","Canta");
                    echo $meuPetC->exibeMenagemSomAnimal();

                ?>

            </div>

            <div class="footer">
                <?php include'views/partials/footer.php'; ?>
            </div>
        </div>
    </body>

