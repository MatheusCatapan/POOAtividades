<?php 

    class Objeto {
        public $altura;
        public $largura;

        public function __construct($altura, $largura)
        {
            $this->altura = $altura;
            $this->largura = $largura;
        }

        public function calcularArea() {
            
        }

    }

    class Triangulo extends Objeto {
        public $area;

        public function __construct($altura, $largura) {
            parent::__construct($altura, $largura);
            $this->area = ($largura * $altura) / 2;
        }

        public function __toString() {
            return "Área do triângulo: " . $this->area;
        }
    }

    class Retangulo extends Objeto {

    }

$triangulo1 = new Triangulo(4, 6);    
echo $triangulo1;