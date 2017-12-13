<?php
namespace face;
interface icontrole_empresa{
public function __construct();
public function insert($cnpj,  $nome_fantasia, $longitude, $latitude);
public function select($cnpj);
public function selectAll();
public function alter($cnpj,  $nome_fantasia, $longitude, $latitude);
public function delete($cnpj);
}
 ?>
