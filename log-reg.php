<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bri Guy's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/shop-homepage.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="#">Bri Guy's</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="../PHP Project/index.php">Home
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="../PHP Project/log-reg.php">Login/Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav> 
 <form action="?php echo $_SERVER['PHP_SELF'];?" method="POST" style="margin-top: 150px; margin-left: 550px;">
Enter Username: <input type="text" name="username" required="required" /> <br/>
Enter password: <input type="password" name="password" required="required" /> <br/>
<input type="submit" value="Register" name="RegisterButton"/>
</form>
               

  <br>
  <form action="log-reg.php" method="POST" style="margin-top: 150px; margin-left: 550px;" >
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
    <input type="submit" value="Login"/>
  </form>
</body>
</html>
