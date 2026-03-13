<?php

class AreaCalc
{
    public static $pi = 3.141517;

    static function areaCircunferencia($raio)
    {
        return $raio * (AreaCalc::$pi);
    }
}

$raioAtual = 10;
$area = AreaCalc::areaCircunferencia($raioAtual);
$valorPi = AreaCalc::$pi;
echo "Área circuferência de raio $raioAtual é $area <br>";
echo "Valor de pi: $valorPi <br>";