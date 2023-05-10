<?php
session_start();
require 'functions.php';

if (isset($_SESSION['login'])){
    header("Location: index.html");
    exit;
}

if (isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
        $_SESSION["login"] = true;
        header("Location: index.html");
        exit;
    }
  }
  $error = true;
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
    <title>Login</title>
  </head>
  <body style="background-color: #e0d1bf;">
    <?php if($error) : ?>
      <script>
        alert('Username atau Password salah!');
        documentLocation.href = 'login.html';
      </script>
    <?php endif; ?>
    <div class="container">
      <form class="border p-4 rounded-3" method="POST" action="">
        <h1 class="text-center mb-4">Login</h1>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password </label>
          <input type="password" class="form-control" id="password" name="password" required />
        </div>
        <div>
          <a href="signup.html">
            <button type="button" class="btn btn-link" style="float: right; text-decoration: none">Signup</button>
          </a>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary" id="login" name="login">Login</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
