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
    // Função sem parametros
    function mensagem(){
        echo "</br> Olá, Mundo!";
        echo "</br> Amo PHP HAHAAAAAI";
    }
    
    // Chamada da função
    mensagem();
    
    echo "</br>";
    //Função com parametro
    function sobrenome($nome,$cidade,$uf){
        echo "</br>" .$nome. "da Silva.";
        echo "<br>É natural de ".$cidade." .Estado: " .$uf;
    }

    sobrenome("Ana" , "campinas" , "Sp");
    sobrenome("Camila" , "campinas" , "Sp");
    sobrenome("ALexandra" , "campinas" , "Sp");
    sobrenome("Paula" , "campinas" , "Sp");

    ?>
</body>
</html>