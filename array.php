<?php

    $meses = array();

    $mes = [
        'Janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
    ];

    echo $mes[date('n')-1];
