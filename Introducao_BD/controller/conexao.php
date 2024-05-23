<?php
    //Conexão com o Banco de Dados
    // Criação de uma classe chamada Conexão
    class Conexao {
        //Variáveis que armazenam o endereço do servidor
        private $host = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $banco = "cliente";
        private $conexao; // criação da variável que se tornará o objeto da para fazer a conexão

        //Método construtor criado para a conexão
        public function __construct() {
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
            
            //Condição para caso o PHP esteja errado, exiba uma conexão;
            if ($this->conexao->connect_error) {
                die("Falha na conexão: " . $this->conexao->connect_error);
            }
        }

        //Retorna o objeto de conexão com o banco de dados
        public function getConexao() {
            return $this->conexao;
        }
    }

?>