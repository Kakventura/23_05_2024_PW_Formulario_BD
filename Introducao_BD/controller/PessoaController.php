<?php

    //Procurar acesso de um arquivo em outras pastas
    // Espécie de "import"
    // CÓDIGO INULTILIZÁVEL require_once '../model/pessoa.php'; -> endereçamento manual do arquivo
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Introducao_BD/model/pessoa.php'; // Captura do endereço primário do servidor, independente do SO que está se utilizando.


    //Definição da classe que controla o recebimento de dados 
    class PessoaController{
        // Declaração da variável privada 
        private $pessoa;
        
        // Método construtor da classe
        public function __construct(){

            //Instanciamento da classe "pessoa" e atribuição na variável privada criada.
            $this->pessoa = new Pessoa();

            //Execução da inserção de dados
            $this->inserir();
        }

        // Recebimento valores das propriedades estabelecidas na classe Pessoa através do HTML
        public function inserir(){
            $this->pessoa->setNome($_POST['nome']);
            $this->pessoa->setEndereco($_POST['endereco']);
            $this->pessoa->setBairro($_POST['bairro']);
            $this->pessoa->setCep($_POST['cep']);
            $this->pessoa->setCidade($_POST['cidade']);
            $this->pessoa->setEstado($_POST['estado']);
            $this->pessoa->setTelefone($_POST['telefone']);
            $this->pessoa->setCelular($_POST['celular']);

            // Chama as ações do método inserir dentro da instância da classe Pessoa.
            $this->pessoa->inserir();

        }
    }

    // Instancia de um objeto da classe PessoaController para acessar a inserção 
    new PessoaController();
?>
