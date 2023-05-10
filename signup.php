<?php
require 'functions.php';

if(isset($_POST["signup"])){
  if(signup($_POST) > 0){
    echo "
      <script>
        alert('Registrasi Berhasil!');
        document.location.href = 'login.html';
      </script>";
  } else{
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Signup</title>
  </head>
  <body style="background-color: #e0d1bf;">
    <div class="container">
      <form class="border p-4 rounded-3" method="POST" action="">
        <h1 class="text-center mb-4">Sign Up!</h1>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password </label>
          <input type="password" class="form-control" id="password" name="password" required />
        </div>
        <div class="mb-3">
          <label for="password2" class="form-label">Confirm Password </label>
          <input type="password" class="form-control" id="password2" name="password2" required />
        </div>
        <div>
          <a href="login.html">
            <button type="button" class="btn btn-link" style="float: right; text-decoration: none">Login</button>
          </a>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary" id="signup" name="signup">Sign up</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
