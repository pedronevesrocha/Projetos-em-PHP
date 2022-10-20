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
    // Matrizes
    $veiculos = array (
        array("Volkswagem", "GOL", "2020", "Preta"),
        array("Volkswagem", "UP", "2018", "Branca"),
        array("Fiat", "ARGO", "2021", "Prata"),
    );

    //Verificação de conteudo da matriz - saida estatica
    echo "</br> Lista de Veiculos";
    echo "</br> Marca: " .$veiculos[0][0];
    echo "</br> Modelo: " .$veiculos[0][1];
    echo "</br> Ano: " .$veiculos[0][2];
    echo "</br> Cor: " .$veiculos[0][3];
    echo "</br>";

    echo "</br> Marca: " .$veiculos[1][0];
    echo "</br> Modelo: " .$veiculos[1][1];
    echo "</br> Ano: " .$veiculos[1][2];
    echo "</br> Cor: " .$veiculos[1][3];
    echo "</br>";

    echo "</br> Marca: " .$veiculos[2][0];
    echo "</br> Modelo: " .$veiculos[2][1];
    echo "</br> Ano: " .$veiculos[2][2];
    echo "</br> Cor: " .$veiculos[2][3];
    echo "</br>";

    //Verificação de conteudo da matriz - saida dinamica
    echo "</br> Lista de Veiculos";
    for ($lin=0; $lin<3; $lin++) { // Linhas da matriz
        for ($col=0; $col<4; $col++) { // Colunas da matriz
            echo "</br>" .$veiculos[$lin][$col];
           
    }
    echo "</br>";
}

    //Com condição
    echo "</br> Lista de Veiculos";
    for ($lin=0; $lin<3; $lin++) { // Linhas da matriz
        for ($col=0; $col<4; $col++) { // Colunas da matriz
            if ($col == 0) {
                echo "</br> Marca: " .$veiculos[$lin][$col];
            }
            else if ($col == 1) {
                echo "</br> Modelo: " .$veiculos[$lin][$col];
            }
            else if ($col == 2) {
                echo "</br> Ano: " .$veiculos[$lin][$col];
            }
            else if ($col == 3) {
                echo "</br> Cor: " .$veiculos[$lin][$col];
            }
            
           
    }
    echo "</br>";
}


    ?>
</body>
</html>