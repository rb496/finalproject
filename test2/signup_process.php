<?php include 'view/header.php'; ?>


<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
</div>
    </div>
  </div>
</div>
   <b><h1>Its free and always will be <div style="position: left;right: -30%; background: grey"<b></h2><br>

<div class="container">
  <form method="post" action="createaccount.php">
    <div class="form-group">
<div style="width: 34%;position: left;right: -30%;background: orange;padding: 8px 10px 8px 12px;color: #fff;border-radius: 7px;">
<form >
  <fieldset>
    <legend>Register:</legend>
    First name:<br>
    <input type="text" name="firstname" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
    Last name:<br>
    <input type="text" name="lastname" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
    E-mail address:<br>
    <input type="text" name="email" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
     Password: <br>
    <input type="password" name="password" class="form-control" id="email" value=""style="padding: 2px 7px 10px 9px;">
    <br>
    Phone no:<br>
    <input type="text" name="phone" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
    Birthdate:<br>
    <input type="date" name="birthday" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="male" checked> Male<br>
   <input type="radio" name="gender" value="female"> Female<br>
    <br>
    <input type="submit" action="createaccount.php" value="Create Account" class="btn btn-default">
  </fieldset>
</div>
</body>
</html>

<html>
<div class="container">
  <h4>Have an account?</h4>
  <form method="post" action="login.php">
    <input type="submit" value="Login" class="btn btn-default">
  </form>
</div>
</html>

<?php include 'view/footer.php'; ?>


