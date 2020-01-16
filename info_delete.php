<?php

  $name = filter_input(INPUT_POST, 'name');
  $conn = mysqli_connect ("localhost","root","","myprojectdb");
  if(mysqli_connect_error()) {
  die('Connection Failed('.mysqli_connect_error().')'
  .mysqli_connect_error());
  } 
  $sql = "DELETE FROM info WHERE Name='$name'";
  if($conn->query($sql)===TRUE){
    echo "Record deleted successfully";
  }
  else{
    echo "Error deleting record".$sql.$conn->error;
  }
  $conn->close();
?> 