<?php
    //Conexão com o Banco de Dados
    // Criação de uma classe chamada Conexão
    class Conexao {
        //Variáveis que armazenam o endereço do servidor
        private $host = "localhost"; // variável criada para armazenar o endereço do host de um banco de dados. 
        private $usuario = "root"; // variável para supostamente armazenar o nome do usuário que vai acessar o banco de dados.
        private $senha = ""; // variável para supostamente a senha do usuário que vai acessar o banco de dados.
        private $banco = "cliente"; // variável que armazena o nome do banco.
        private $conexao; // criação da variável que se tornará o objeto da para fazer a conexão.

        //Método construtor criado para a conexão
        public function __construct() {
            
            // this = este
            //this -> = este aqui
            // Cria uma nova conexão (instância) com a classe mysqli e incluindo as variáveis
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
         
            
            //Condição para caso o PHP esteja errado, exiba uma conexão;
            if ($this->conexao->connect_error) {
                // Mensagem de erro
                die("Falha na conexão: " . $this->conexao->connect_error);
            }
        }

        //Retorna o objeto de conexão com o banco de dados
        public function getConexao() {
            return $this->conexao;
        }
    }

?>
