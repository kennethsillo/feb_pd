<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/functions/register.php';
if(!empty($_POST)){
$register = new register($_POST['username'],$_POST['email'],$_POST['password']);
$register->register();
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quiz In IT CO-OP | Register</title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="resources/styles/style.css">
  <link href="resources/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="resources/fontawesome/css/brands.css" rel="stylesheet">
  <link href="resources/fontawesome/css/solid.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark ">
      <a class="navbar-brand text-light" href="index.php">Return To Home</a>
    </nav>

    <div class="container h-90">
  		<div class="d-flex justify-content-center h-90">
  			<div class="user_card">
  				<div class="d-flex justify-content-center">
  					<div class="brand_logo_container">
  						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
  					</div>
  				</div>
  				<div class="d-flex justify-content-center form_container">
  					<form method="POST" action="">
  						<div class="input-group mb-2">
  							<div class="input-group-append">
  								<span class="input-group-text"><i class="fas fa-user"></i></span>
  							</div>
  							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
  						</div>
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="input-group-text" name="email" class="form-control input_pass" value="" placeholder="email">
              </div>
  						<div class="input-group mb-2">
  							<div class="input-group-append">
  								<span class="input-group-text"><i class="fas fa-key"></i></span>
  							</div>
  							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
  						</div>

  				</div>
  				<div class="d-flex justify-content-center mt-3 login_container">
  					<input type="submit" value="Register">
  				</div>
  				<div class="mt-4">
  					<div class="d-flex justify-content-center links" style="color:white;">
  						Have An Account? Click Here To <a href="login.php" class="ml-2">login</a>
  					</div>
  				</div>
        </form>
  			</div>
  		</div>
  	</div>

        <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom">
  <div class="container text-center">
    <small>Copyright &copy; Your Website</small>
  </div>
</footer>
  </body>
