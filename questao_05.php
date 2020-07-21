<?php

$aux = array( 'Karin', 'Caio', 'Vinicius', 'Leandro', 'Felipe' );

// Antes de ordenar
/*
array(5) {
    [0]=>
    string(5) "Karin"
    [1]=>
    string(4) "Caio"
    [2]=>
    string(8) "Vinicius"
    [3]=>
    string(7) "Leandro"
    [4]=>
    string(6) "Felipe"
  }
*/  

// Aplicando a ordenação
sort( $aux );

// Após ordenação
/*
array(5) {
    [0]=>
    string(4) "Caio"
    [1]=>
    string(6) "Felipe"
    [2]=>
    string(5) "Karin"
    [3]=>
    string(7) "Leandro"
    [4]=>
    string(8) "Vinicius"
  }
*/  