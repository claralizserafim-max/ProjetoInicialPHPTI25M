<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;
        
        //Criar um construtor = Cria as variáveis no servidor
        public function __construct(){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2; 
            return $this->resultado;
        }//fim do método somar

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método subtrair

        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método multiplicar

        public function dividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método dividir

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Impossível calcular X1 e X2, delta negativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método

        public function exercicio1(float $a, float $b){
            $this->resultado = $a + $b;
            return $this->resultado;
        }//fim de exercício01

        public function exercicio2(float $a){
            $this->resultado = $a * 2;
            return $this->resultado;
        }//fim de exercício02

        public function exercicio3(float $a, float $b, float $c): float{
    return ($a + $b + $c) / 3;
        }//fim de exercício03

        public function exercicio4(float $a){
            if ($a < 0) {
            return "Não existe raiz quadrada real para números negativos >:(";
        }
            $this->resultado = sqrt($a);
             return $this->resultado;
        }//fim de exercício04

        public function exercicio5(float $metros){
            $this->resultado = $metros * 100;
            return $this->resultado;
        }// fim de exercício05

        public function exercicio6(float $raio){
            $area = M_PI * pow($raio, 2);
            return $area;
        }// fim de exercício06

        public function exercicio7(float $b){
            $soma = $b * 1.8;
            $this->resultado = $soma + 32;
            return $this->resultado;
        }//fim de exercicio07

        public function exercicio8(float $a){
            $this->resultado = $a - ($a * 0.10);
            return $this->resultado;
        }// fim de exercício08
}//fim da classe
?>