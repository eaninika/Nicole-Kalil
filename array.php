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
    echo 'Posição 1 no array mês: ';
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

 echo 'Dia do mês: ' . $diaMes . '<br>' . 'Dia Semana: ' . $diaSemana . '<br>' . 'Mês: ' . $mes . '<br>' . 'Ano: ' . $ano . '<br>';
 return $dataFormatada;
}
    echo dataAtual();
    echo '<hr>';
function media($nota1 , $nota2 , $nota3 , $nota4)
{

 $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
 return $media;
}
echo 'Sua média é: ' . media(7 , 5 , 8 , 9);
echo '<hr>';
