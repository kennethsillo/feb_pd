<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/db/config.php';
class login extends config{
    public $username;
    public $password;

public function __construct($username=null,$password=null){
  $this->username = $username;
  $this->password = $password;
}

public function logsIn(){
    $config = new config;
    $pdo = $config->Connect();
    $username = $this->username;
    $password = $this->password;
    $sql = "SELECT `username`, `password`FROM `users_pd` WHERE `username`= ? AND `password`=?";
    $data = $pdo->prepare($sql);
    $data->execute(["$username","$password"]);
  }
}
?>
