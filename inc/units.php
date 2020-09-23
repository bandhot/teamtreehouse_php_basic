<?php

// buat function celciustofarenheit
//nilai 1 celcius =33.8
//parameter function int celcius
//invoke function celciustofarenheit(12); //print 53.6
function celciustofarenheit( $celcius)
{
    $convernsi=($celcius*9/5)+32;

    echo "$celcius celcius = $convernsi farenheit";
}

celciustofarenheit(80);