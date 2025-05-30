<?php 

    class Pessoa {
        public $nome;
        public $endereco;
        public $email;
        public $telefone;
    
        public function __construct($nome, $endereco, $email, $telefone) {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
        }
    
    }

    class Livros {
        public $nome;
        public $autor;
        public $nPaginas;
        public $disponibilidade;
        public $disponivel;
        public $alugadoPor;

        public function __construct ($nome, $autor, $nPaginas, $dispinibilidades) {
            $this->nome = $nome;
            $this->autor = $autor;
            $this->nPaginas = $nPaginas;
            $this->disponibilidade = $dispinibilidades;
            $this->disponivel = true;
        }
        public function alugar(Pessoa $pessoa) {
            if ($this->disponibilidade) {
                $this->disponibilidade = false;
                echo "Livro '{$this->nome}' alugado para {$pessoa->nome}.\n";
            } else {
                echo "Livro '{$this->nome}' não está disponível.\n";
            }

        }
    
        public function devolver() {
            if (!$this->disponivel && $this->alugadoPor !== null) {
                echo "Livro '{$this->nome}' devolvido por {$this->alugadoPor->nome}.\n";
                $this->disponivel = true;
                $this->alugadoPor = null;
            } else {
                echo "Livro '{$this->nome}' já está disponível.\n";
            }
        }

    }

    $matheus = new Pessoa ("Matheus", "Rua das Rosas 9", "m.oliveira.mo355@gmail.com", "42988634181");
    $tigre = new Pessoa ("tigre", "rua das orquideas", "tigre@gmail.com", "89573985");
    $livro1 = new Livros ("Teste", "tigresss" , 1500, false);
    $livro2 = new Livros ("Testing", "ursos" , 1500, true);
    
    $livro1->alugar($tigre);
    $livro2->alugar($matheus);
    $livro1->devolver();
    $livro2->devolver();