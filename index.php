<?php

include "db.php";
session_start();
ob_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>Login System!</title>
  </head>
  <body>
    <section class="container text-center">
      <div class="jumbotron">
        <h1 class="display-4">Login System Using Session</h1>
        <p class="lead">Ans to the ques no 6.</p>
        <hr class="my-4">
        <p>By <strong>MD.Masbahul Islam Shaik</strong>. ID:181-15-1773. Section:PC-A</p>
      </div>
    </section>
    <section class="container p-5 bg-light">
      <div class="row">
        <div class="col-md-4">
          <h3 class="mb-4 text-info">Login Here</h3>
          <form method="POST" action="inc/login.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="em" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="log_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <input type="submit" name="login" class="btn btn-primary" value="Login">
          </form>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
          <form method="POST">
            <div class="form-group">
              <label for="inputAddress">Full Name</label>
              <input type="text" required class="form-control" name="reg_name" id="inputAddress" placeholder="Name">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" required class="form-control" name="reg_em" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" required class="form-control" name="reg_pass" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Phone Number</label>
              <input type="number" required class="form-control" name="reg_phn" id="inputAddress" placeholder="Phone">
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
          </form>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

<?php

if (isset($_POST['register'])) {
    $reg_name   = $_POST['reg_name']; 
    $reg_em     = $_POST['reg_em']; 
    $reg_pass   = $_POST['reg_pass']; 
    $reg_phn    = $_POST['reg_phn']; 
    $query = "INSERT INTO users (name, email, pass, phone) VALUES ( '$reg_name', '$reg_em', '$reg_pass', '$reg_phn' )";

      $add_new_user = mysqli_query($connection, $query);

      if ( !$add_new_user ){
        die("Query Failed ". mysqli_error($connection));
      }
      else{
        echo '<div class="alert alert-success" role="alert">
            Register Successfull!
          </div>';
      }

}
  


?>





    
  </body>
</html>