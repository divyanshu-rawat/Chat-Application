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
                <?php
                
                    $query = "SELECT * FROM chat_info ORDER BY id DESC";
                    $query_run   = mysqli_query($con,$query);
//                    $query_run =$con -> query($query);
                
//                    $query_array = mysql_fetch_assoc($query_run)
                    
                    while($query_row = mysqli_fetch_assoc($query_run)):?>
                
                <div id ="chat_data">
                </div>
                <span style="color:red;"><?php echo $query_row['name'].' : '; ?></span>
                <span style="font-family:cursive;"><?php echo $query_row['msg']; ?></span>
                <span style = "font-family:cursive;float:right;"><?php echo $query_row['date'] ?></span>
<!--
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
-->
                
                <?php endwhile; ?>
                
                
        <form class="form-horizontal" style="margin-top:250px;">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="" placeholder="Name" name ="username">
            </div>
          </div>
          <div class="form-group">
              <label for="comment" class="col-sm-2 control-label">Comment:</label>
              <div class = "col-sm-10">
                <textarea name = "message" class="form-control" rows="2" id="comment"></textarea>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name = "submit" class="btn btn-primary">Send it !</button>
            </div>
          </div>
        </form>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $name = $_POST['name'];
                        $message = $_POST['message'];
                        
                    }
                
                        $query = "INSERT INTO chat_info (name,msg) VALUES ('$name','$message')";
                        $query_run = mysql_query($con,$query);
                
                    if($query_run)
                    {
                        
                    }
                
                ?>
                
            </div>
        </div>
        
        
    </body>

</html>