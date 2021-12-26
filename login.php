<?php

session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: index.php");
                            
                        }
                    }

                }

    }
}    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>

  <header>
        <div class=main>
            <div>
                <h1><span id=main1>C</span><span id=main2>o</span><span id=main3>l</span><span id=main4>o</span><span
                        id=main5>r</span><span id=main6>P</span><span id=main7>i</span><span id=main8>x</span><span
                        id=main9>e</span><span id=main10>l</span>
                        <a href="./index.html" class="fa fa-paint-brush" ></a>
                </h1>
                <h3>Every color matters</h3>
                
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="templates1.html">Templates</a></li>
                <li><a href="themes1.html">Themes</a></li>
                <li><a href="downloads.html">Downloads</a></li>
                <li><a href="https://localhost/login/login.php">Login</a></li>
                <li><a href="https://localhost/login/register.php">Register</a></li>
            </ul>
        </div>
    </header>

<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div><button type="submit" class="btn btn-primary">Submit</button>&nbsp&nbsp<span class="in">Don't have an account?
  <a href="https://localhost/login/register.php">Register</a></span></div>
</form>
<br>
<br>
<br>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <footer class="bg">
        <div class="grid-container">
            <div class="item1">
                <a href="./about.html"style="color: black;">About</a><br>
                <a href="./index.html" style="color: black;">Home</a><br>
                <a href="./templates1.html" style="color: black;">Templates</a><br>
                <a href="./themes1.html"style="color: black;"> Themes</a><br>
                 <a href="./downloads.html"style="color: black;">Downloads</a><br>
                 <a href="./login.php"style="color: black;">Login</a><br>
            <a href="./register.php"style="color: black;">Register</a><br></div>
            <div class="item2">For further queries and feedback:<br>
                 <i class="fa fa-envelope"></i> <a href = "mailto:colorpixel2911@gmail.com" class="colp">&nbsp&nbspSend Email</a><br>
                 <i class="fa fa-phone"></i>&nbsp&nbspCall Us<br></div>
          </div>
        </div>
        <div class="bg1"> <p class="gap"> &copy; ColorPixel 2020</p></div>
       <div class="bg2"> <i class="fa fa-facebook "></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i></div>
    </footer>
</html>
