<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$idade = 30;
echo "idade = $idade <br>";

if($idade < 18  or $idade > 60){
    echo "Meia entrada";
}else{
    echo "Inteira";
}