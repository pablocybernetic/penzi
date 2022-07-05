<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Penzi </title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Penzi</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">See your Match</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Learn More</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Learn</a>
                        <a class="dropdown-item" href="#">Support Forums</a>
                    </div>
                </li>
                <?php if (isset($_SESSION['user'])) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php } else {?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <?php } ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center p-1">
                <h4>Welcome</h4>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<h5> Hello' . $_SESSION['user'] . '</h5>';
                } else {
                    echo '<h5> Hello Guest</h5>';
                }

                ?>
                
                <div class="card"></div>
            </div>
        </div>
    </div>
    <!-- required bootstrap js -->
    <button type="submit" name="commit" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#signup">
      Signup
    </button>
    <!-- <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
              <span>Login <i class="fa fa-sign-in"></i></span>
            </button>
            <div class="text-center">
              <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="modal fade" id="signup" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Signup</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
          <form action="register.php" method="post">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-user"></i>
                </span>
              </div>
              <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-phone"></i>
                </span>
              </div>
              <input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input type="text" name="password1" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
            </div>
            <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
              <span>Signup <i class="fa fa-sign-in"></i></span>
            </button>
            <div class="text-center">
              <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
if ($_GET['message'] == 'Registration successful') {
    echo '<div class="alert alert-success" role="alert">
    <strong>Success!</strong>  Registered.
  </div>';
}elseif ($_GET['message'] == 'Registration failed') {
    echo '<div class="alert alert-danger" role="alert">
    <strong>Failed!</strong>  Registration failed.
  </div>';
}

$_GET['message'] ;

    // include 'footer.php';
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>