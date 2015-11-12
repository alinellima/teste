<?php
    class Usuario {
        public $nome;
        public $email;
        public $nascimento;
        
        
        public function __construct($nome, $email, $nascimento) {
            $this->nome = $nome;
            $this->email = $email;
            $this->nascimento = $nascimento;
        }
    }
?>