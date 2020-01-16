<?php
     $conn = mysqli_connect('localhost','root','');
     if(!$conn)
     {
          echo "Not connected to Server";
     }

     if(!mysqli_select_db($conn,'myprojectdb'))
     {
          echo "Database not selected";
     }
     
     $Name = $_POST['name'];
     $Born = $_POST['born'];
     $Age = $_POST['age'];
     $Birth_Place = $_POST['birth_place'];
     $Role = $_POST['role'];
     $Bating_Style = $_POST['bating_style'];
     $Bowling_Style = $_POST['bowling_style'];
     $Career = $_POST['career'];

     $sql = "INSERT INTO info (Name,Born,Age,Birth_Place,Role,Bating_Style,Bowling_Style,Career) VALUES ('$Name', '$Born','$Age','$Birth_Place','$Role','$Bating_Style','$Bowling_Style','$Career')";
     
     if(!mysqli_query($conn,$sql))
     {
         echo "Record not Inserted";
     }
      else
      {
          echo "Record Inserted";
      }

?>