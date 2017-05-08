<?php include 'view/header.php'; ?>


<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <class="col-sm-8">
    </div>
  </div>
  <b><h1>CREATE A NEW ACCOUNT</b></h1>
  <h4>Its free and always will be.</h4>
   <div style="position: left;right: -40%;; background:a2a7ad"</h2><br>

<div class="container">
  <form method="post" action="createaccount.php">
    <div class="form-group">
<div style="width: 34%;position:center;right: -40%;background: orange;padding: 8px 10px 8px 12px;color: #fff;border-radius: 7px;">
<form >
  <fieldset>
    <legend>Register:</legend>
    First name:<br>
    <input type="text" name="fname" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;"required>
    <br>
    Last name:<br>
    <input type="text" name="lname" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;"required>
    <br>
    Email :<br>
    <input type="text" name="email" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;"required>
    <br>
     Password: <br>
    <input type="password" name="password" class="form-control" id="email" value=""style="padding: 2px 7px 10px 9px;"required>
    <br>
    Phone no:<br>
    <input type="text" name="phone" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
     Date of Birth:<br>
    <input type="date" name="birthday" class="form-control" id="email" value="" style="padding: 2px 7px 10px 9px;">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="male" > Male<br>
   <input type="radio" name="gender" value="female"> Female<br>
    <br>
    <input type="submit" action="createaccount.php" value="Create Account" class="btn btn-default">
  </fieldset>
</div>
</body> 
</html>

<html>
<br>
<div class="container">
  <h4>Have an account?</h4>
  <form method="post" action="login.php">
    <input type="submit" value="Login" class="btn btn-default">
  </form>
</div>
</html>

<?php include 'view/footer.php'; ?>


