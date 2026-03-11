<?php

class Pessoa
{
    public $nome;
    public $peso;
    public $altura;
    public $imc;

    function __construct($nome, $peso, $altura)
    {
        $this ->nome = $nome;
        $this ->peso = $peso;
        $this ->altura = $altura;
        $this ->imc = $this -> calcularImc();
    }

    function calcularImc()
    {
        return number_format ($this->peso / ($this->altura * $this->altura));
    }

   
}
 $Loueny = new Pessoa ("Loueny", 55, 1.64);

echo "Loueny o seu IMC: $Loueny->imc";