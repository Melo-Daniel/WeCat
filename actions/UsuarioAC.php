<?php
require_once '../lib/Usuario.php';

$op = $_POST['op'];
switch ($op) {
  case 1:
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $u = new Usuario();

    $u->setNome($nome);
    $u->setEmail($email);
    $u->setSenha($senha);
    $u->setImg('default.jpg');
    $u->setStatus(1);

    if($u->inserirUsuario($u)){
      echo "ok";
    }else{
      echo "erro";
    }
    break;
}
 ?>
