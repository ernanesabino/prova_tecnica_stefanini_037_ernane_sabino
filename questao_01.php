<?php

$entrada = 'Carro, Avião, Mulher, Biscoito, Papagaio, Telefone, Água, Caderno';

$entrada = explode( ',', $entrada );

$quantidadePalavras = count( $entrada );

echo "Existem {$quantidadePalavras} na string";