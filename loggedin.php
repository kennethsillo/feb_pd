<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resources/functions/login.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Quiz In IT CO-OP | Home</title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="resources/styles/style.css">
  <link href="resources/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="resources/fontawesome/css/brands.css" rel="stylesheet">
  <link href="resources/fontawesome/css/solid.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark justify-content-between">
      <a class="navbar-brand text-light" href="index.php">Quiz In It</a>
        <form class="form-inline">
            <a class="nav-link text-light"  href="">Welcome:</a>
            <a class="nav-link text-light" href="index.php">Logout</a>
        </form>
    </nav>

    <div class="container h-90">
      <div class="d-flex justify-content-center h-90">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                <label class="mt-4" style="color:white;font-size:18px;">Change Password</label>
            </div>
          </div>
          <div class="d-flex justify-content-center form_container">
            <form>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="" class="form-control input_user" value="" placeholder="OldPassword">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="" class="form-control input_pass" value="" placeholder="NewPassword">
              </div>
            </form>
          </div>
          <div class="d-flex justify-content-center mt-3 login_container">
            <button type="button" name="button" class="btn login_btn">Change Password</button>
          </div>
        </div>
      </div>
    </div>


        <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom">
  <div class="container text-center">
    <small>Copyright &copy; Your Website</small>
  </div>
</footer>
  </body>
