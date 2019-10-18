<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/db/config.php';
class register extends config{
    public $username;
    public $email;
    public $password;

public function __construct($username=null,$email=null,$password=null){
  $this->username = $username;
  $this->email = $email;
  $this->password = $password;
}

public function register(){
    $config = new config;
    $pdo = $config->Connect();
    $username = $this->username;
    $email = $this->email;
    $password = $this->password;
    $sql = "INSERT INTO `users_pd`(`username`, `email`, `password`) VALUES(?,?,?)";
    $data = $pdo->prepare($sql);
    $data->execute(["$username","$email","$password"]);
  }
}
?>
