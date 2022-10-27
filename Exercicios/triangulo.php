<html>
 <head>
  <title></title>
 </head>
 <body>
 <form action="" method="get">
  Lado 1:  <input type="number" name="numero1" /><br />
  Lado 2:  <input type="number" name="numero2" /><br />
  Lado 3:  <input type="number" name="numero3" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php 
  $a = $_GET['numero1'];
  $b = $_GET['numero2'];
  $c = $_GET['numero3'];

  if( ($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){
   if($a==$b && $b==$c)
    echo "Triangulo Equilatero";
   elseif ($a==$b || $a==$c || $b==$c)
    echo "Triangulo Isoceles";
   else
    echo "Triangulo Escaleno";
  }else
   echo "Não é um triangulo";
 ?>
 </body>
</html>