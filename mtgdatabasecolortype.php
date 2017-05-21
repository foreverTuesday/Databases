<HTML>
<HEAD>
<TITLE> Find Card By Color And Type</TITLE>
</HEAD>
<style>
body {
background-color: #E8EBF5;
}

table {
background-color: #7089D1;
width: 30%;
border-collapse: collapse;
position: relative;
margin: auto;
       top: 0; 
       left: 0;
       bottom: 0; 
       right: 0;
}



td {
height: 50px;
color: white;
padding: 15px;
text-align: center;
}

tr:nth-child(odd) {background-color: #001E76}
</style>
<BODY>
<?php

$host = 'dany.simmons.edu';
$user = 'scheffm';
$password = '1651460';
$database = '33302sp16_scheffm';


$conn = mysql_connect($host,$user,$password) or die('unable to connect' . mysql_error($conn));

mysql_select_db($database,$conn) or die ('unable' . msql_error($conn));



$color = $_POST["color"];
$type = $_POST["type"];




$sql = "CALL CardFromColorType('$color','$type')";


$result = mysql_query($sql);

echo ("<TABLE border=2>");
while($row=mysql_fetch_row($result)){
echo("<TR>");
echo("<TD>".$row[0]."</TD>");
echo("</TR>");
}
echo "</TABLE>";



$result = mysql_query($sql); 

echo ("<TABLE border=2>");
while($row=mysql_fetch_row($result)){
echo("<TR>");
for($j=0;$j<mysql_num_fields($result);$j++){
echo("<TD>".$row[$j]."</TD>");
}
echo("</TR>");
}
echo "</TABLE>";

?> 
</body>
</html>