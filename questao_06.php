<?php

function retornaImpar ( int $n1, int $n2 )
{
    if( $n1 > $n2 ) {
        $aux = $n1;
        $n1 = $n2;
        $n2 = $aux;
    }

    for ( $i = $n1; $i < $n2; $i++ ) {
        if( ($i % 2 != 0) && $i != 1 ) {
            echo "{$i}, ";
        }
    }
}

retornaImpar( 1, 10 );