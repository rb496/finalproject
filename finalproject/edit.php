<?php include 'view/header.php'; ?>
<?php 
  $item_id = $_GET['itemid'];
  // echo $item_id;
  // require('pdoConnect.php');
  // $sql = 'select * from my_tasks where taskid = "'.$item_id.'"';
  // $results = runQuery($sql);
?>
<html>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
       <center><h1 style="color:black">Add your task to edit</h1></center>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="post" action="index.php" >
      <div class="form-group">
      <div style="width: 54%;position: relative;right: -10%;background: orange ;padding: 10px 12px 10px 14px;color: #fff;border-radius: 9px;">
     <form >
     <fieldset>
     <legend>Edit your task:</legend>   
        Task:
        <input type="text" name="task" value="" style="padding: 4px 9px 12px 11px" class="form-control" id="task" placeholder="Change Task"required/>
        Start Date:<br>
        <input type="date" name="createddate" style="padding: 4px 9px 12px 11px" class="form-control" id="createddate" />
        <input type="hidden" name="item_id" class="form-control" id="item_id" value="<?php echo $item_id;?>" />
        End date:<br> 
        <input type="date" name="duedate" style="padding: 4px 9px 12px 11px" class="form-control" id="duedate" />
        <input type="hidden" name="action" class="form-control" value="after_edit">
      </div>
      <div class="form-group">
        <center><input type="submit" value="Editing complete" class="btn btn-default" /></center>
      </div>
    </form>
  </div>
  
</body>
</html>
<?php include 'view/footer.php'; ?>
