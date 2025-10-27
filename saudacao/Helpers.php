<?php
date_default_timezone_set("america/sao_paulo");

function saudacao(): string
{
    //formato de data Y-M-D h:i:s
    $hora = date('H');
    if ($hora >= 0 && $hora < 5) {
        $saudacao = "Boa madrugada!";
    }elseif ($hora >= 5 && $hora < 12) {
        $saudacao = "Bom dia!";
    }elseif ($hora >= 13 && $hora < 18) {
        $saudacao = "Boa tarde!";
    }else{
        $saudacao = "Bom noite!";
    }

    return $saudacao;

}