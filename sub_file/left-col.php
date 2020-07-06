<div id="left-col-container">
<div style="cursor: pointer" onclick="document.getElementById('new-message').style.display='block'" class="white-back">
     <p align="center"><b><font face = "Comic sans MS" size =" 3"> <span style="color: #ff0000;">Click Here </span> to chat with our experts</font></b></p>
   </div>
   <p></p><br />

  

<?php


$q="SELECT DISTINCT reciever_name, sender_name 
    FROM messages WHERE
    sender_name='$_SESSION[username]' OR 
    reciever_name='$_SESSION[username]'
    ORDER BY date_time DESC ";
 $r = mysqli_query($con, $q);
 
 if($r)
 {  // 1st if
      if(mysqli_num_rows($r)>0)
      {  // 2nd if

        $counter = 0;
        $added_user = array();
        while($row= mysqli_fetch_assoc($r))

        {  // while loop
        
         $sender_name= $row['sender_name'];
         $reciever_name= $row['reciever_name'];

         if($_SESSION['username'] == $sender_name)

          {   //3rd if
          //add the reciever_name but only once
          //so to do that check the user in array
          if(in_array($reciever_name, $added_user))
           {     //4th if
            //dont add reciever_name because
            //he is already added
           }  //end of 4th if
            else
             {  //4th  else 
            //add the reciever_name
               ?>
               <div class="grey-back">
                   <img src="images/expert.jpg" class="image"/>
                <b> <?php echo '<a href="?user='.$reciever_name.'"style="color: #000000">'.$reciever_name.'</a>' ; ?></b>
                   </div>

                   <?php
         
                     //as reciever_name added so
                       //add it to the array as well
                    $added_user = array($counter => $reciever_name) ;
                    //increment the counter
                    $counter++;

              } // end of 4th else
           } //end of 3rd if

             elseif($_SESSION['username'] == $reciever_name)
                {   // elseif
               //add the sender_name but only once
               //so to do that check the user in array
               if(in_array($sender_name, $added_user))
                {
               //dont add sender_name because
               //he is already added
                }
                  else
                   {
                   //add the sender_name
                   ?>
                   <div class="grey-back">
                       <img src="images/expert.jpg" class="image"/>
                      <b> <?php echo '<a href="?user='.$sender_name.'"style="color: #000000">'.$sender_name.'</a>'; ?></b>
                       </div>

                       <?php
         
                        //as sender_name added so
                        //add it to the array as well
                        $added_user = array($counter => $sender_name) ;
                        //increment the counter
                        $counter++;

                   }
                } // end of elseif

        } // end of while loop

      } //end of 2nd if
      else
    {
      //no message sent
       ?>
      <!-- <h2 style="color:black">Hire us for any kind of computer help!! </h2> -->

       <p > <font face = "Courier New" size =" 3"><b> Remember the username of particular expert, click the above link, fill up the fields and wait for the response!!  </b> </font> </p>
        <p > <font face = "Courier New" size =" 3"></font> </p><br />
       <li><p > <font face = "Courier New" size =" 3">  <b>Hire Virag Thakur having username <span style="color: #990000;">Virag</span> to get help in Web Development, Web Penetration Testing and Web Application.  </b></font></p></li>

       <p><font face = "Courier New" size =" 3"><b>Hire Vishal Kumar having username <span style="color: #990000;">Vishal</span> to get help in Linux operating system , recovering lost data and Forensics Investigation. </b></font></p>

       <p ><font face = "Courier New" size =" 3"><b>Hire Pulkit having username <span style="color: #990000;">Pulkit</span> to get help in Microsoft Windows. </b></font></p>

       <p ><font face = "Courier New" size =" 3"><b>Hire Dipesh Kumar having username <span style="color: #990000;">Dipesh</span> to get help in Networking and Android development. </b></font></p>


       <?php
    }

 }//end of 1st if
    else
        {
       //query problem
       echo $q;
        } 
?>
</div>