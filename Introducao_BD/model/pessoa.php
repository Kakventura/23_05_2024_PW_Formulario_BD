<?php
//Procurar acesso de um arquivo e propriedade em outras pasta
require_once '../controller/conexao.php';

class Pessoa{
    // Criação (réplicas) das variáveis para o recebimento de seus valores 
    private $id; // variável de identificação 
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao; //Variável para armazenar a conexão com o banco de dados

    //Recebimento de valores das propriedades privadas (Métodos Getters e Setters)
    public function getId(){
        // Método para obter o valor da propriedade 'id' (Get = conseguir)
        return $this->id;
    }
    public function setId($id){
        // Método para definir o valor da propriedade 'id' (Set
        $this->id = $id;

    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
    
    //Nova conexão estabelecida 
    public function __construct(){
        $this->conexao = new Conexao();
    }

    // Método para inserir os dados da pessoa no banco de dados
    public function inserir(){
        
        //Instruções em SQL
                          //tabela/entidade(atributos, atributos, atributos, atributo) valores_ que_serão_substituidos (?,?,?,?)
        $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        return $stmt->execute();
    }
}

?>
