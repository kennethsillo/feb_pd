<?php
require_once 'resources/db/config.php'
class login extends config{


}

?>


require('config.php');
session_start();
if(isset($_SESSION['user'])!="")
{
  header("location:index.php");
}
if(isset($_POST['login']))
{
  $email=strip_tags($_POST['email']);
  $password=strip_tags($_POST['password']);
  $email=filter_var($email,FILTER_VALIDATE_EMAIL);
  if(empty($email))
  {
    $_SESSION['msg']= "Email required";
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL,array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))))
  {
    $_SESSION['msg']="Invalid Email";
  }
  else if(empty($password))
  {
    $_SESSION['msg']= "Password required";
  }
  if(!isset($_SESSION['msg']))
  {
    $query = $db->prepare("SELECT user_id, email, password FROM users WHERE email=?");
    $query->execute([$email]);
    $row=$query->fetch(PDO::FETCH_ASSOC);
    $count = $query->rowcount();
    if (password_verify($password, $row['password']) && $count==1) {
      $_SESSION['user'] = $row['user_id'];
      header("Location:home.php");
    }
    else
    {
      $_SESSION['msg']="Invalid Email or Password";
    }
  }
}
