<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade(){
        return $this->velocidade;
    }

    public function setVelocidade($novaVelocidade){
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
            echo "Você esta na velocidade continue<br>";
        } else {
            echo "Velocidade esta Perigosa.<br>";
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->setVelocidade(200); // Velocidade de foguete?
$meuCarro->getVelocidade();   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>