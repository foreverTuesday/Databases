<HTML>
<HEAD>
<TITLE> Find Card By Name</TITLE>
</HEAD>
<style>
body {
background-color: #E8EBF5;
}
table, th, td {
border: 1px solid black;
}
table {
background-color: #7089D1;
width: 80%;
border-collapse: collapse;
position: relative;
margin: auto;
       top: 0; 
       left: 0;
       bottom: 0; 
       right: 0;
}


th {
height: 50px;
background-color: #001E76;
}

td {
height: 50px;
}
th, td {
color: white;
padding: 15px;
text-align: left;
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



echo "<br/><br/>";

$name = $_POST["name"];




$sql = "Call CardFromName('$name')";


$result = mysql_query($sql);

echo ("<TABLE border=2>");
echo("<th>Collector's Number</th>");
echo("<th>Name</th>");
echo("<th>Color</th>");
echo("<th>Type</th>");
echo("<th>CMC</th>");
while($row=mysql_fetch_row($result)){
echo("<TR>");
echo("<TD>".$row[0]."</TD>");
echo("<TD>".$row[1]."</TD>");
echo("<TD>".$row[2]."</TD>");
echo("<TD>".$row[3]."</TD>");
echo("<TD>".$row[4]."</TD>");
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