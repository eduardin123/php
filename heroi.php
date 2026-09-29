<?php

class Heroi {
    private $nome;
    private $poder;

    public function __construct($nome, $poder){
        $this->nome = $nome;
        $this->poder = $poder;
    }

    public function exibirDados(){
        echo "Herói: " . $this->nome . " | Poder Especial: " . $this->poder . "<br>";
    }
}

$h1 = new Heroi("Homem de Ferro", "Armadura");
$h1->exibirDados();

$h2 = new Heroi("Thor", "Trovão");
$h2->exibirDados();

$h3 = new Heroi("Batman", "Preparo");
$h3->exibirDados();

?>