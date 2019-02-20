<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

for($i = 1; $i <= 10; $i++){
    echo "<br>Tabuada do $i<br>";
    for($j = 1; $j <= 10; $j++){
    $resul = $i * $j;
    echo "[ $i X $j = $resul ]";
}
}