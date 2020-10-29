<?php

/** 
 * Funcio que realitza el numero pi
 * @param $result, $mutliplicador, $signe variables que utilitzarem
 * @return $pi numero pi 
*/
function programador1($n) {
    $result = 1;
    $multiplicador = -1;
    $signe = -1;
    for ($i=2;$i<$n;$i++) {
        //echo "$result = $result + $signe / (2 * $i -1);<br>";
        $result = $result + $signe / (2 * $i -1);
        $signe = $multiplicador * $signe;
    }
    $pi = 4 * $result;

    return $pi;
}