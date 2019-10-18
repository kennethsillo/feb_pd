<?php
class config{
  private $user = 'root';
  private $pass = '';
  public $con;

  public function Connect(){
    try{
      $this->con = new PDO('mysql:host=localhost;dbname=feb_pd', $this->user,$this->pass);
    } catch (PDOException $e){
      die($e);
    }
      return $this->con;
  }
}
 ?>
