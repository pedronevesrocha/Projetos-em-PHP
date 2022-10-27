<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
  Nome:  <input type="String" name="Nome" /><br />
  Data de nascimento: <input type="date" name="Data"/><br />
  <input type="submit" name="submit" value="Enviar" />
 </form>
 <?php
 
 
$nome = $_GET['Nome'];
$dataForm = $_GET['Data'];
$hoje = date("Y-m-d");
$data = explode("-", $dataForm);
$dataClass = new DateTime($dataForm);
$resultado = $dataClass->diff( new DateTime( date('Y-m-d') ) );
$idade = $resultado->format( '%Y anos' );

if(($data[1]==3 && $data[2] >= 21) || ($data[1]==4 && $data[2] <= 20)){
    $signo="Aries";
}
if(($data[1]==4 && $data[2] >= 21) || ($data[1]==5 && $data[2] <= 20)){
    $signo="Touro";
}
if(($data[1]==5 && $data[2] >= 21) || ($data[1]==6 && $data[2] <= 20)){
    $signo="Gemeos";
}
if(($data[1]==6 && $data[2] >= 21) || ($data[1]==7 && $data[2] <= 22)){
    $signo="Cancer";
}
if(($data[1]==7 && $data[2] >= 23) || ($data[1]==8 && $data[2] <= 22)){
    $signo="Leao";
}
if(($data[1]==8 && $data[2] >= 23) || ($data[1]==9 && $data[2] <= 22)){
    $signo="Virgem";
}
if(($data[1]==9 && $data[2] >= 23) || ($data[1]==10 && $data[2] <= 22)){
    $signo="Libra";
}
if(($data[1]==10 && $data[2] >= 23) || ($data[1]==11 && $data[2] <= 21)){
    $signo="Escorpiao";
}
if(($data[1]==11 && $data[2] >= 22) || ($data[1]==12 && $data[2] <= 21)){
    $signo="Sagitario";
}
if(($data[1]==12 && $data[2] >= 22) || ($data[1]==1 && $data[2] <= 20)){
    $signo="Capricornio";
}
if(($data[1]==1 && $data[2] >= 21) || ($data[1]==2 && $data[2] <= 19)){
    $signo="Aquario";
}
if(($data[1]==2 && $data[2] >= 19) || ($data[1]==3 && $data[2] <= 20)){
    $signo="Peixes";
}
    echo "<h3>Olá ". $nome. " sejá bem-vindo(a) !</h3>";
    echo "<h3>Você tem atualmente ". $idade. " anos de idade.</h3>";
    echo "<h3>De acordo com sua data de nascimento seu signo é ". $signo. "</h3>";
    echo "<h3>Mensagem positiva para o signo de: ".$signo. " Você terá um mês de muita sorte!!!</h3>";
 ?>
</body>
</html>