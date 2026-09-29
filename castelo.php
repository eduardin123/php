<?php

class Castelo {
    public $nome;
    public $reino;
    public $qtde_torres;
    public $fosso;

    public function __construct($nome, $reino, $qtde_torres, $fosso){
        $this->nome = $nome;
        $this->reino = $reino;
        $this->qtde_torres = $qtde_torres;
        $this->fosso = $fosso;
    }

    public function mostrarDetalhes(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Reino: " . $this->reino . "<br>";
        echo "Quantidade de torres: " . $this->qtde_torres . "<br>";
        echo "Fosso: " . $this->fosso . "<br>";
    }
}

$c1 = new Castelo("Castelo de Avalon", "Norte Real", 8, true);
$c1->mostrarDetalhes();

?>