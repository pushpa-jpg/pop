<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myprojectdb";
$conn= new mysqli ($servername,$username,$password,$dbname);
echo "SEARCH SUCCESSFUL!!!";
if($conn->connect_error) {
die("Connection Failed.".$conn->connect_error);
}
$name=$_POST['name']; 
mysqli_select_db($conn,$dbname);
$sql = "SELECT name,born,age,birth_place,role,bating_style,bowling_style FROM info WHERE Name='$name'";
$records=mysqli_query($conn,$sql);
?> 
<!DOCTYPE html>
<html>
<head>
<title>Display</title>
<style>
body{
  background-color:white;
  background-size:100% 100%;
}
</style>
</head>
<body>
  <table width="auto" border="1" cellpadding="7" cellspacing="5" align="center"> 
     <tr>
     <th>name</th>
     <th>born</th>
     <th>age</th>
     <th>birth_place</th>
     <th>role</th>
     <th>bating_style</th>
     <th>bowling_style</th>
     </tr>
     <?php
     while($disp=mysqli_fetch_assoc($records)) {
       echo "<tr>";
       echo "<td>".$disp['name']."</td>";
       echo "<td>".$disp['born']."</td>";
       echo "<td>".$disp['age']."</td>";
       echo "<td>".$disp['birth_place']."</td>";
       echo "<td>".$disp['role']."</td>";
       echo "<td>".$disp['bating_style']."</td>";
       echo "<td>".$disp['bowling_style']."</td>";
     }
     ?>
  </table>
</body>
</html>