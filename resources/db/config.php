<?php
class config{
  private $user = 'root';
  private $pass = '';
  public $con = null;

  public function Connect(){
    try{
      $this->con = new PDO('mysql:host=localhost;dbname=feb_pd', $this->user,$this->pass);
      $this->con -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $this->con ->setAttribute(PDO::ATTR_EMULATE_PREPARES_FALSE);
    } catch (PDOException $e){
      echo $e->getMessage();
    }
      return $this->con;
  }
}
 ?>
