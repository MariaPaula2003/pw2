<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$n1 = 10;
$n2 = 20;
$n3 = 30;

echo " n1 = $n1 e n2 = $n2 e n3 = $n3<br>";

if($n1 > $n2 && $n1 > $n3){
   echo "O maior número é n1 : ".  $n1;  
}
if($n2 > $n1 && $n2 > $n3){
    echo "O maior número é n2 : ".  $n2;  
}
else{
    echo "O maior número é n3 : ".  $n3;  
}
