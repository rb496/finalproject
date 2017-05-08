<?php include 'view/header.php'; ?>
<!doctype html>
<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Hey there, welcome to Agenda</h2>
      <h4>Login with your credential and lets get started</h4>
    </div>
  </div>
  </div>
  
 </hr>     
<div class="container" style="color:black">
  <h2>Log In</h2>
  <form method="post" action="index.php" >
    <div class="form-group">
    <div style="width: 34%;position: left;right: -30%;background: orange;padding: 8px 10px 8px 12px;color: #fff;border-radius: 7px;">
    E-mail address:<br>
    <input type="text" name="email" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
     Password: <br>
    <input type="password" name="password" class="form-control" id="email" value=""style="padding: 2px 7px 10px 9px;">
    <br>
    <div class="form-group">
      <input type="hidden" name="action" class="form-control" value="test_user_valid">
    </div>
    <input type="submit" name="login" value="Login" class="btn btn-default">
  </form><br>
    </div>
  </div>
  </div>

<div class="container">
  <h4>Don't have an account?<form method="post" action="signup_process.php">  <input type="submit" value="Sign up" class="btn btn-default"></h4>
  </form>
</div>

</body>
</html>
<?php include 'view/footer.php'; ?>