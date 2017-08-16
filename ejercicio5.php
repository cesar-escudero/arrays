<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EJERCICIO 5</title>
  </head>
  <body>
    <h4>NUMEROS: 1,2,3,4,5,6,7,8,9,10</h4>
    <?php

$numero = array(1,2,3,4,5,6,7,8,9,10);

$suma = ($numero[0]+$numero[1]+$numero[2]+$numero[3]+$numero[4]+$numero[5]+$numero[6]+$numero[7]+$numero[8]+$numero[9] );
echo " Suma Del 1 AL 10 Son:$suma<hr>";


$resta = ($numero[0]-$numero[1]-$numero[2]-$numero[3]-$numero[4]-$numero[5]-$numero[6]-$numero[7]-$numero[8]-$numero[9] );
echo "  Resta Del 1 AL 10 Son: $resta<hr>";



$multiplicacion = ($numero[0]*$numero[1]*$numero[2]*$numero[3]*$numero[4]*$numero[5]*$numero[6]*$numero[7]*$numero[8]*$numero[9] );
echo "  Multiplicacion Del 1 AL 10 Son: $multiplicacion<hr>";


$divicion = ($numero[0]/$numero[1]/$numero[2]/$numero[3]/$numero[4]/$numero[5]/$numero[6]/$numero[7]/$numero[8]/$numero[9] );
echo " Divicion Del 1 AL 10 Son: $divicion<hr>";

     ?>
  </body>
</html>
