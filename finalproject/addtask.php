<?php include 'view/header.php'; ?>

<html>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
     <u><center><h1 style="color:Black">New Agenda</h1></center></u>
      </div>
    </div>
  </div>

  <div class="container" style="color:orange"> 
    <form method="post" action="index.php" >
      <div class="form-group">
      <div style="width: 54%;position: relative;right: -20%;background: orange ;padding: 10px 12px 10px 14px;color: #fff;border-radius: 9px;">
<form >
<fieldset>
    <legend>Create new task:</legend>
    Task:<br>
        <input type="text" name="task" value="" style="padding: 4px 9px 12px 11px" class="form-control" id="task" placeholder="Enter task"required>
        start date:<br>
        <input type="date" name="createddate"  value="" style="padding: 4px 9px 12px 11px" class="form-control" id="createddate" >
        end date:<br>
        <input type="date" name="duedate"  value="" style="padding: 4px 9px 12px 11px" class="form-control" id="duedate">
        <input type="hidden" name="action" class="form-control" value="add_task">
        </div>
    <div class="form-group">
   <b><center><input type="submit" value="Add New Task" style="color:grey" class="btn btn-default" /></center></b>
    </div>
   </form>
</div> 

</body>
</html>
<?php include 'view/footer.php'; ?>
