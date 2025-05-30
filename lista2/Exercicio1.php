<?php 

    class Funcionario {

        public $nome;
        public $cargo;
        private $salarioBase = 2000;
        private $horasTrabalhadas = 160;

        public function __construct($nome, $cargo) {
            $this->nome = $nome;
            $this->cargo = $cargo;
        }
        public function calcularSalario() {
            return 2000.00 . "\n";
        }    

        public function exibirInfos() {
            return $this->nome . "\n" . $this->cargo . "\n";
        }
    }

    class Gerente extends Funcionario {

        public $nome;
        public $cargo;
        public $quantidadeDeColaboradores;
        private $adicionalPorColaborador = 250;

        public function __construct($nome, $cargo, $quantidadeDeColaboradores) {
            parent::__construct($nome, $cargo);
            $this->quantidadeDeColaboradores = $quantidadeDeColaboradores;
        }
        public function calcularSalario() {
            return 6000.00 + ($this->quantidadeDeColaboradores * $this->adicionalPorColaborador) . "\n";
        }
        public function exibirInfos() {
            parent::exibirInfos();
            return parent::exibirInfos();
        }
    }

$Matheus = new Funcionario("Matheus", "Desenvolvedor");
echo $Matheus->calcularSalario();
echo $Matheus->exibirInfos();

$Diego = new Gerente("Diego", "Gerente de Produto", 10);
echo $Diego->calcularSalario();
echo $Diego->exibirInfos();