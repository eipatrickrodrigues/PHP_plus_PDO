<?php

class Pessoa{

    // Atributos
    const HOST = '127.0.0.1';
    const NAME = 'agenda';
    const USER = 'root';
    const PASS = '';
    private $banco;

    // Método construtor
    public function __construct()
    {
      try{$this->banco = new PDO('mysql:dbname = '.self::NAME.', host = '.self::HOST,self::USER,self::PASS);
      }
      catch(PDOException $e){
        echo "Erro no Banco de Dados: ".$e->getMessage();
        exit;
      }
      catch(Exception $e){
        echo 'Erro Genérico: '.$e->getMessage();
        exit;
      }
      
    }


    // Cadastrar
    public function cadastrarPessoa($nome, $telefone, $email, $senha, $endereco, $cidade, $estado, $cep){

        // Antes de cadastrar, é necessário verificar se já existe cadastro.
        $verificador = $this->banco->prepare('SELECT id FROM agenda WHERE email = :e');
        $verificador->bindValue(":e", $email);
        $verificador->execute();

        if ($verificador->rowCount()>0){ // Verificador apresentou dados
          return false;
        }else{
          $cadastro = $this->banco->prepare("INSERT INTO agenda (nome, telefone, email, senha, endereco, cidade, estado, cep) values (:n, :tel, :email, :s, :ed, :est, :cep)");
          $cadastro->bindValue(":n",$nome);
          $cadastro->bindValue(":tel",$telefone);
          $cadastro->bindValue(":emaol",$email);
          $cadastro->bindValue(":s",$senha);
          $cadastro->bindValue("ed",$endereco);
          $cadastro->bindValue("est",$estado);
          $cadastro->bindValue("cep",$cep);
          $cadastro->execute();
          return true;

        }

    }








}




























?>