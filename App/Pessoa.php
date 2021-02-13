<?php
namespace App;

use App\DB\DataBase;
require __DIR__. '/DB/DataBase.php';

class Pessoa{


  // Cadastrar
  public function cadastrarPessoa(){

    $obDataBase = new DataBase('agenda');
    $this->id = $obDataBase->insert([

      'nome' => $this->nome,
      'email' => $this->email,
      'senha' => $this->senha,
      'endereco' => $this->endereco,
      'cidade' => $this->cidade,
      'nascimento' => $this->nascimento,
      'estado' => $this->estado,
      'telefone' => $this->telefone,
      'cep' => $this->cep,

    ]);

    echo "<pre>";
    print_r($this);
    echo "</pre>";

  }

}



































?>