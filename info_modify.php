<html>
    <head>
        <title>update records in mysql using php</title>
        <style type="text/css">
           body{
               margin:0;
               width:100vw;
               height: 100vh;
               
               background-position: fixed;
               opacity:0.8;
              
           }
           .tr{
               font-size: 20px;
              
           }
           .th{
            font-color: blue;
           }
        </style>

    </head>
    <body>
        <?php
        //connect to mysqldb
        $conn = mysqli_connect('localhost','root','');

        //select db
        mysqli_select_db($conn,'myprojectdb');

        //select query
        $sql = "SELECT * FROM info";

        //execute query
        $result = mysqli_query($conn,$sql);
        ?>
        
        <table>
            <tr>
                <th>Name </th>
                <th>Born </th>
                <th>Age </th>
                <th>Birth_Place </th>
                <th>Role </th>
                <th>Bating_Style</th>
                <th>Bowling_Style</th>
            </tr>
       </table>    
            <?php
             while($row = mysqli_fetch_array($result))
             {
                echo "<tr><form action=info_update.php method=post>";
                echo "<td><input type=text name=name value='".$row['name']."'</td>";
                echo "<td><input type=text name=born value='".$row['born']."'</td>";
                echo "<td><input type=text name=age value='".$row['age']."'</td>";
                echo "<td><input type=text name=birth_place value='".$row['birth_place']."'</td>";
                echo "<td><input type=text name=role value='".$row['role']."'</td>";
                echo "<td><input type=text name=bating_style value='".$row['bating_style']."'</td>";
                echo "<td><input type=text name=bowling_style value='".$row['bowling_style']."'</td>";

                echo "<input type=hidden name=name value='".$row['name']."'>";
                echo "<td><input type=submit>";
                echo "</form></tr>";
             }
            ?>    
    </body>           
</html>