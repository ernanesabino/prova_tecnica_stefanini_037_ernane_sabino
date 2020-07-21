<?php

$entrada = 'Carro, Avião, Mulher, Biscoito, Papagaio, Telefone, Água, Caderno';

$entrada = explode( ', ', $entrada );

foreach( $entrada as $entrada ) {
    if( substr( $entrada, 0, 1) == 'C' ) {
        echo "{$entrada} <br>";
    }
}