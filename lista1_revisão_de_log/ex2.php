<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$salario = 1000;

echo "Salário = ". $salario;

if ($salario <= 1000){
    $salario = ((40*$salario)/100)+ $salario;
}
else{
    $salario = ((30*$salario)/100)+ $salario;
}

echo "<br>"; 

echo "Novo salário = ". $salario;