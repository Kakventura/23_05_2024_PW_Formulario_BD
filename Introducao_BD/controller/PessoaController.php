<?php

    //Procurar acesso de um arquivo em outras pastas
    // Espécie de "import"
    require_once '../model/pessoa.php';

    //Definição da classe que controla o recebimento de dados 
    class PessoaController{
        private $pessoa;
        
        public function __construct(){

            //Instanciamento da classe "pessoa" e atribuição na variável
            $this->pessoa = new Pessoa();

            //Execução da inserção de dados
            $this->inserir();
        }

        // Definição dos valores 
        public function inserir(){
            $this->pessoa->setNome($_POST['nome']);
            $this->pessoa->setEndereco($_POST['endereco']);
            $this->pessoa->setBairro($_POST['bairro']);
            $this->pessoa->setCep($_POST['cep']);
            $this->pessoa->setCidade($_POST['cidade']);
            $this->pessoa->setEstado($_POST['estado']);
            $this->pessoa->setTelefone($_POST['telefone']);
            $this->pessoa->setCelular($_POST['celular']);
            
            $this->pessoa->inserir();

        }
    }

    // Instancia de um objeto da classe PessoaController para acessar a inserção 
    new PessoaController();
?>