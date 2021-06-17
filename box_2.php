<!DOCTYPE html>
<html>
<head>
<title>DISPLAY DATA IN THE DATABASE</title>
<style type="text/css">
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
  text-align: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
.mom{
            color:brown;
            font-style: normal;
            font-weight: 700;
}

</style>
</head>
<body>
<h1>SENSOR VALUES OF BOX 2</h1>
<center><table id="customers">
<tr>
   <th>TEMPERATURE</th>
   <th>HUMIDITY</th>
   <th>METHANE_GAS</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root","","test");
if($conn-> connect_error){
    die("Connection failed:". $conn-> connect_error);
    }
$sql ="SELECT TEMPERATURE, HUMIDITY, METHANE_GAS from box_2";
$result =$conn-> query($sql);
if($result->num_rows>0){
    while($row =$result-> fetch_assoc()){
        echo  " <tr><td>".$row["TEMPERATURE"]."</td><td>". $row["HUMIDITY"]. "</td><td>" . $row["METHANE_GAS"] 
        ."</td></tr>" ;
    }    
    echo"</table>";
}
else {
    echo "0 result";
    }
$conn-> close();

?>
</table></center>
<a class="mom" href="work.html">CLICK HERE TO VIEW THE PREVIOUS PAGE</a
</body>
</html>