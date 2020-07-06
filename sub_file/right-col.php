<div id="right-col-container">
	<div id="messages-container">

  
<style>
#foo{ color: #FFFFFF; font-family:'Rouge Script', cursive; font-size: 14px; line-height: 15px; margin: 0 0 15px; }

</style>

   <?php

        $no_message = false ;
       if(isset($_GET['user'])){
        $_GET['user'] = $_GET['user'];

       } else{
              //user variable is not in the url bar
              //so select the last user, you have sent message
              $q="SELECT sender_name, reciever_name FROM messages
              WHERE sender_name = '$_SESSION[username]'
              or reciever_name = '$_SESSION[username]'
              ORDER BY date_time DESC LIMIT 1";
              $r = mysqli_query($con, $q);
              if($r)
              {
                 if(mysqli_num_rows($r)>0)
                 {
                   while($row =mysqli_fetch_assoc($r))
                   {
                    $sender_name = $row['sender_name'];
                    $reciever_name = $row['reciever_name'];

                     if($_SESSION['username'] == $sender_name)
                     {
                     $_GET['user'] = $reciever_name;
                     }
                     else
                     {
                     $_GET['user'] = $sender_name;
                     }
                    }
                  }
                  else
                  {
                   //this user havent sent any message
                   // echo 'No messages for u';
				   
				   ?>
				   
				   <img class="img-responsive" src="hand.png" alt="">
				   
				   <?php
				   
                   $no_message = true;
                  }
              }
              else
              {
               //query problem
               echo $q;
              }
       } 
        if($no_message == false){
        $q="SELECT * FROM messages WHERE 
            sender_name='$_SESSION[username]'
            AND reciever_name='$_GET[user]'
            OR
            sender_name='$_GET[user]'
            And reciever_name='$_SESSION[username]'";
        $r= mysqli_query($con, $q);
            if($r){
              //query successfull
              while ($row = mysqli_fetch_assoc($r)){
                $sender_name = $row['sender_name'];
                $reciever_name = $row['reciever_name'];
                $message = $row['message_text'];

                //check who is the sender of the message
                if($sender_name == $_SESSION['username']){
                  //show the message with grey back
                  ?>
                    <div class="grey-message">
                       <a href="#" style="color: #000000">Me</a>
                       <p id="foo" style="color: #006600;"><b><?php echo $message; ?></b></p>
                    </div>                                                                              
                  <?php
                }else{
                  //show the message with white back
                  ?> 
                    <div class="white-message">
                       <a href="#" style="color: #000000"><?php echo $sender_name ;?></a>
                       <p id="foo" style="color: #ffff33;"><b><?php echo $message; ?></b></p>
                    </div>
                  <?php

                }
              }

            }else{
              //query problem
              echo $q;
            }
              //end of no_message
            }
   ?>
    	
   <!-- end of messages container -->
	</div>

  <form method="post" id="message-form">

  <textarea class="textarea" id="message_text" placeholder="Write your message"></textarea>

  </form>
<!-- end of right-col-container --> 
</div>
<script src="sub_file/jquery-3.4.1.min.js"></script>
<script>
 
 $("document").ready(function(event){
  
  //now if the form is submitted

  $("#right-col-container").on('submit', '#message-form', function(){
     //take the data from textarea
     var message_text = $("#message_text").val();
     //send the data to sending_process.php file
     $.post("sub_file/sending_process.php?user=<?php echo $_GET['user']; ?>",
     {
      text: message_text,
     },
      //in return we'll get
      function(data, status){
        //alert(data);

       //first remove the text from message_text so
       $("#message_text").val("");

       //now add the data inside
       //the message container
       document.getElementById("messages-container").innerHTML += data;

      }


      );
  });

  //if any button is click inside
  //right-col-container
  $("#right-col-container").keypress(function(e){
    //as we will submit the form with enter button so
     if(e.keyCode == 13 && !e.shiftKey){
       //it means enter is clicked without shift key
       //so submit the form
       $("#message-form").submit();

     }

  });
 
 });

</script>










