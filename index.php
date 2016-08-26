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


<body onload= "ajax(); ">

<div class="container" style="" >
    <div id="chat_box">
        
        <div id="chat">
        
        
        </div>

                
        <form method = "post" action="index.php" class="form-horizontal" style="margin-top:150px;">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Name" name ="username">
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
                    if(isset($_POST['username']) && isset($_POST['message']))
                    {
                        $name = $_POST['username'];
//                        echo $name;
                        $message = $_POST['message'];
//                        echo $message;
                        $query_1 = "INSERT INTO chat_info (name,msg) VALUES ('$name','$message')";
                        $query_run = mysqli_query($con,$query_1);
                
                        if($query_run)
                        {
                            echo "<audio src = 'sound/134332-facebook-chat-sound.mp3' hidden = 'true' autoplay = 'true' /></audio>";
                        }

                   }
                ?>
                
            </div>
        </div>
    </body>
    <script src="script.js"></script>

</html>