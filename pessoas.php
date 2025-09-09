<?php

class Pessoa
{
    public $nome;
    public $telefone;
    public $endereço;

    public function __construct($nome, $telefone, $endereço){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereço = $endereço;

    }
}

class pessoaFisica extends Pessoa
{
    public $CPF;

    public function __construct($nome, $telefone, $endereço, $CPF){
        parent::__construct  ($nome, $telefone, $endereço);
        $this->CPF = $CPF;
    }

}

class pessoaJuridica extends Pessoa
{
    public $CNPJ;
    private array $socios = [];


    public function __construct($nome, $telefone, $endereço, $CNPJ,){
        parent::__construct ($nome, $telefone, $endereço);
        $this->CNPJ = $CNPJ;

    }
    public function acrecentar(pessoaFisica $socio){
        array_push($this->socios, $socio);
        //$this->socios[] += $socio;
    }
}

// ----------------- Exemplo de uso -------------------

$pf1 = new pessoaFisica("João", "9999-1111", "Rua A, 121", "121.456.789.00");
$pf2 = new pessoaFisica("Maria", "9999-2222", "Rua B, 456", "987.654.321.00");

$pj = new pessoaJuridica("Tech line", "3333-4444", "Av. Central, 1000", "12.345.678/0001-99");
$pj->acrecentar($pf1);
$pj->acrecentar($pf2);

var_dump($pf1);
echo"<br>";
echo"<br>";
var_dump($pf2);
echo"<br>";
echo"<br>";
var_dump($pj);
echo"<br>";
echo"<br>";
