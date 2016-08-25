<?php

    include 'db.php';

?>

<!DOCTYPE html>


<html>
    
    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css">
        
    </head>


    <body>
        
        <div class="container" style="" >
            <div id="chat_box">
                
                
                <div id ="chat_data">
                </div>
                <span style="color:red;">Divyanshu:</span>
                <span style="font-family:cursive;">How are you ?</span>
                <span style = "font-family:cursive;float:right;">12:30</span>
<!--
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
-->
<form class="form-horizontal" style="margin-top:250px;">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Send it !</button>
    </div>
  </div>
</form>
                
                
            </div>
        </div>
        
        
    </body>

</html>