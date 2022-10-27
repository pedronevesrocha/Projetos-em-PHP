<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome:  <input type="string" name="nome" /><br />
  Altura:  <input type="number" name="altura" /><br />
  Peso:  <input type="number" name="peso" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
<?php
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    
       $imc= $peso/($altura*$altura);
       
       if($imc<18.5){
           $classificacao="Abaixo do peso normal";
           $grau="0";
       }elseif($imc<24.9){
           $classificacao="Peso Normal";
           $grau="0";
       }elseif($imc<29.9){
           $classificacao="Acima do peso normal";
           $grau="I";
       }elseif($imc<39.9){
           $classificacao="Obesidade";
           $grau="II";
       }
    

    if(isset($imc)){
        echo "<h3>O usuário ".$nome." com peso ".$peso."Kg"." e altura ".$altura. " Metros". "</h3>";
        echo "<h3>Foi classificado como ".$classificacao." Grau de obesidade: ".$grau."</h3>";
        echo "<h3>Cuide sempre da sua saúde. Procure um médico especialista.</h3>";
    }
}
 ?>
</body>
</html>