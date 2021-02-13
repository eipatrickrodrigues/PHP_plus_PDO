<?php 

namespace App\DB;
use PDO;
use PDOException;
use Exception;

class DataBase{

    // Atributos
  const HOST = '127.0.0.1';
  const NAME = 'agenda';
  const USER = 'root';
  const PASS = '';
  private $table;
  private $connection;

  // Método construtor
  
  public function __construct($table)
  {
    $this->table = $table;
    $this->setConnection();
    
  }

  private function setConnection(){

    try{
        $this->connection = new PDO('mysql:dbname = '.self::NAME.'; host = '.self::HOST,self::USER,self::PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
      echo "Erro no Banco de Dados (setConnection) : ".$e->getMessage();
      exit;
    }
    catch(Exception $e){
      echo 'Erro Genérico: '.$e->getMessage();
      exit;
    }
  }

  //Método executor de queries dentro do banco de dados.
  public function execute($query,$params = []){

    try{
        
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;

    }catch(PDOException $e){
        echo "Erro no Banco de Dados (execute) : ".$e->getMessage();
    }catch(Exception $e){
        echo "Erro Genérico: ".$e->getMessage();
    }
  }
  

  public function insert($values){
    // Dados da query
    $fields = array_keys($values);
    $binds = array_pad([], count($fields),'?');

    // Query
    $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') values ('.implode(',',$binds).')';

    // Executa a Query
    $this->execute($query, array_values($values));

    // Retorna o ID
    return $this->connection->lastInsertId()+1;

  }




















































}

  