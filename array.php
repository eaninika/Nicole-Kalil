<?php

    $meses = array();

    $mes = [
        'Janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
    ];
echo 'CHAVE E VALOR<br>';
foreach ($mes as $key => $value){
    echo $key . ' : ' . $value . "<br>";
}

    echo '<hr>';
    echo 'VAR_DUMP';
    var_dump($mes);
    echo '<hr>';
    echo 'Posição 1 no array MÊS';
    echo $mes[1];
    echo '<hr>';

 //data
function dataAtual(): string
{
 $diaMes = date('d');
 $diaSemana = date('w');
 $mes = date('m');
 $ano = date('Y');

 $nomeDosMeses = ['janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

 $nomeDiasDaSemana = ['domingo' , 'segunda-feira' , 'terça-feira' , 'quarta-feira' , 'quinta-feira' , 'sexta-feira' , 'sabado'];

 $dataFormatada = $nomeDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes - 1] . ' de ' . $ano;

 return $dataFormatada;
}
    echo dataAtual();
