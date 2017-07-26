<?php
require_once 'conexao.php';

class Categoria extends DB{
  private $id , $categoria, $status;

  public function setId($id){
    $this->id = $id;
  }
  public function setCategoria($categoria){
    $this->categoria = $categoria;
  }
  public function setStatus($status){
    $this->status = $status;
  }

  public function inserirCategoria($c){
    $sql = "";
    $stm = DB::prepare()
    return $stm->execute();
  }
  public function listarCategorias(){
    $sql = "select * from tb_categorias where cat_status = 1";
    
  }


}
 ?>
