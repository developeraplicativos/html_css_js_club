<?php
class getInput{
  public static function inputTexto($texto){
    $texto = getInput::limpaString($texto);
    $pattern = '/[^[:alnum:]_\ .,]/';
    $replacement = '';
    return preg_replace($pattern, $replacement, $texto);
  }
  public function limpaString($limpo){
    $padrao[0] = '/truncate/';
    $padrao[1] = '/delete/';
    $padrao[2] = '/update/';
    $padrao[4] = '/ or /';
    $padrao[5] = '/ and /';
    $padrao[6] = '/ drop /';
    $padrao[7] = '/select/';
    $excluir = '';
    return preg_replace($padrao, $excluir, $limpo);
  }
  public static function inputNumero($texto){
    $pattern = '/[^0-9 \-.,\()]/';
    $replacement = '';
    return preg_replace($pattern, $replacement, $texto);
  }
  public static function inputEmail($texto){
    $texto = getInput::limpaString($texto);
    $pattern = '/[\-,\'¨"()*$%#!]/';
    $replacement = '';
    return preg_replace($pattern, $replacement, $texto);
  }
}

?>
