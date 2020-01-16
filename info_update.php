<?php

   //connect to mysqldb
   $conn = mysqli_connect('localhost','root','');

   //select db
   mysqli_select_db($conn,'myprojectdb');

   //update query
   $sql = "UPDATE info SET Name='$_POST[name]', Born='$_POST[born]' , Age='$_POST[age]' , Birth_Place='$_POST[birth_place]' , Role='$_POST[role]' ,  Bating_Style='$_POST[bating_style]' , Bowling_Style='$_POST[bowling_style]' WHERE Name='$_POST[name]'";


   //execute query
   if(mysqli_query($conn,$sql))
      header("refresh:1 url=info_modify.php");

      else 
        echo "Not updated";
 
 ?>