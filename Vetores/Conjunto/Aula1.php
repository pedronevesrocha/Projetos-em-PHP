<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //trabalhando com conjuntos - Vetor
    $frutas = array("Laranja", "Maça", "Banana", "Pera", "Lichia", "Manga", "Mamao", "Carambola");

    //verificação de conteudo do vetor
    echo "</br> *** Lista de Frutas ***";
    echo "</br>" .$frutas[0];
    echo "</br>" .$frutas[1];
    echo "</br>" .$frutas[2];
    echo "</br>" .$frutas[3];

    //verificação de conteudo do vetor - saida dinamica
    echo "</br>";
    echo "</br> *** Lista de Frutas ***";
    for ($ind = 0; $ind < 5; $ind++) {
        echo "</br>" .$frutas[$ind];
    }

    //conta quantidade de elementos do conjunto
    $qtde = count($frutas);
    echo "</br>";
    echo "</br> Existem ".$qtde." frutas dentro do conjunto";

     //verificação de conteudo do vetor - saida dinamica
     echo "</br>";
     echo "</br> *** Lista de Frutas ***";
     for ($ind = 0; $ind < $qtde; $ind++) {
         echo "</br>" .$frutas[$ind];
     }


     //primeiro parametro conjunto segundo parametro indice (Estrutura especial para conjuntos)
     echo "</br>";
     echo "</br> *** Lista de Frutas ***";
     foreach($frutas as $ind) {
        echo "</br>" .$ind;
     }

    ?>
</body>
</html