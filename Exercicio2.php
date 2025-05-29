<?php 

    class Universidade {
        private $nome;
    
        public function __construct($nome) {
            $this->nome = $nome;
        }
    
        public function informaNome() {
            return $this->nome;
        }
    }

    class Pessoa {
       
        private $nome;
        private $universidade;

        public function __construct($nome, Universidade $universidade) {            
            $this->nome = $nome;
            $this->universidade = $universidade;
        }

        public function informaNome() {
            return $this->nome;
        }
        public function informaUniversidade() {
            return $this->universidade->informaNome();
        }
    }
        

$utfpr = new Universidade("UTFPR");
$uepg = new Universidade("UEPG");

$aluno = new Pessoa("Matheus", $utfpr);
echo $aluno->informaNome() . " - " . $aluno->informaUniversidade() . "\n";

$aluno2 = new Pessoa("Guilherme", $uepg);
echo $aluno2->informaNome() . " - " . $aluno2->informaUniversidade() . "\n";    
