<?php
require_once("config.php");
//cnpj nome_fantasia estado senha endereco cidade complemento
class controle_responsavel implements face\icontrole_responsavel{
  public $conexao;
  public $lik;
  public function __construct(){
    $this->conexao = new conn();
    $this->lik = $this->conexao->getConn();
  }
  public function insert($cpf,$nome,$email,$celular,$senha,$cnpj_empresa){// id eventos deve ser retirado            EXCLUIR
                                  //INSERT INTO responsavel (`cpf`,`nome`,`email`,`celular`,`senha`,`cnpj_empresa`) VALUES('SDF','012','012','012','012','7777');
    if($result = $this->lik->query("INSERT INTO responsavel (cpf,nome,email,celular,senha,cnpj_empresa) VALUES ('$cpf','$nome','$email','$celular','$senha','$cnpj_empresa')")){/*valores dependentes $cnpj_empresa',$id_eventos*/
       return mysqli_affected_rows($this->lik);//retorna valores maior que 0 quando alterado
    }
    $this->conexao->sair();
  }

  public function login($email, $senha){
    if($result = $this->lik->query("SELECT * FROM responsavel WHERE email='$email' AND senha='$senha' ")  ){
       $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
       if(!empty($json)){
         echo '
          <script>
            alert("usuario logado");
          </script>
         ';
       }
       //return $json;
    }
  $this->conexao->sair();
  }

  public function select($cpf){ //SELECT * FROM responsavel WHERE cpf
    if($result = $this->lik->query("SELECT * FROM responsavel WHERE cpf='$cpf'")){
       $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
       return $json;
    }
    $this->conexao->sair();
  }

  public function selectAll(){
    if($result = $this->lik->query("SELECT * FROM responsavel")){
       $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
       return $json;
    }
    $this->conexao->sair();
  }

  public function alter($cpf,$nome,$email,$celular,$senha,$cnpj_empresa){//update responsavel set nome='cacete', email='666', celular='666', senha='666', cnpj_empresa='014' WHERE cpf='bola'
    if($this->lik->query("UPDATE responsavel SET nome='$nome', email='$email', celular='$celular', senha='$senha', cnpj_empresa='$cnpj_empresa' WHERE cpf ='$cpf'; ")){
       return mysqli_affected_rows($this->lik);//retorna valores maior que 0 quando alterado
    }
    $this->conexao->sair();
  }

  public function delete($cpf){
    if($this->lik->query("DELETE FROM responsavel WHERE cpf = '$cpf'")){
       return mysqli_affected_rows($this->lik);//retorna valores maior que 0 quando alterado
      }
    $this->conexao->sair();
  }

}
/*
$c = new controle_responsavel();
//insert($cpf,$nome,$email,$celular,$senha,$cnpj_empresa)
//echo $c->insert('tust','012','012','012','012','7777');
//var_dump( $c->alter('bola','555','555','555','555','014'));
var_dump( $c->delete('bola'));
$c->sairConexao();

//echo "laticia";
*/
?>
