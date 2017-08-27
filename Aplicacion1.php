<?php

$num=1;
$suma=0;
$cont=0;



while ($suma<1000) {
  $cont++;
 

        echo "Numero:$num <br>";
        $num=$num+1;
        $suma=$suma+$num;
       
  
    
}


    
if($suma>1000)
{

    $suma=$suma - $num;
    $num -1;
}
echo "Suma: $suma <br>"; 
echo "Total de numeros sumados:$cont";





?>