<?php
class usuario{
  private $nome ="pedrinho";
  private $email;
  private $telefone;
  private $estado;
  private $cpf;
  private $cid;
  private $end;
  private $comp;
  private $senha;
  public function __construct(){
    echo "entrando no usuario";
  }
  public function edit($atb, $valor=""){
    if($valor!=""){
      $this->$atb = $valor;
    }
    return $this->$atb;
  }
}

 ?>
