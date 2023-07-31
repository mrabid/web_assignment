<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">Navbar</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <br><br>

    <h2 class="text-center">Have a some questions</h2><br>

    <div class="container">
        <div class="row">
          <div class="col-sm">
            
          </div>
          <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.objetconnecte.com/wp-content/uploads/2021/08/Bulle-de-discu.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Input in the boxes on the right side</p>
                </div>
              </div>
            </div>
    
<div class="col-sm">
    <form method="post" action="from.php">
        <br>
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div><br>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div><br>

        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div><br>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div><br>

        <div class="form-group">
            <button input type="submit" value="Submit" class="btn btn-outline-dark">Submit</button>
        </div><br>
    </form>
</div>
</body>
</html>


<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "my";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO abc (name, email, username, password) values ('$name','$email','$username','$password')";
$conn->query($sql);
?>