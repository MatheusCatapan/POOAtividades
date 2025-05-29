<?php 

     class Pessoa {
        
        public $nome;
        public $idade;
        public $diaDeNascimento;
        public $mesDeNascimento;
        public $anoDeNascimento;   

        public function __construct($nome, $dia, $mes, $ano) {
            $this->nome = $nome;
            $this->diaDeNascimento = $dia;
            $this->mesDeNascimento = $mes;  
            $this->anoDeNascimento = $ano;  
        }
        
        
        public function informaIdade() {
            $dataAtual = new DateTime();
            $dataNascimento = new DateTime("{$this->diaDeNascimento}-{$this->mesDeNascimento}-{$this->anoDeNascimento}");
            $idade = $dataNascimento->diff($dataAtual)->y;
            return $idade; 
        }

        public function informaNome() {
            return $this->nome;
        }    
        
        public function ajustaDataNascimento($dia, $mes, $ano) {
            $this->diaDeNascimento = $dia;
            $this->mesDeNascimento = $mes;  
            $this->anoDeNascimento = $ano;  
        }

    }   

    $Matheus = new Pessoa("Matheus", 05, 03, 2004);
    
    echo $Matheus->informaNome() . "\n";  
    echo $Matheus->informaIdade() . "\n";    
    echo $Matheus->ajustaDataNascimento(10, 10, 2000) . "\n";
    echo $Matheus->informaIdade() . "\n";