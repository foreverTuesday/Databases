<HTML>
<HEAD>
<TITLE> Add Land Card</TITLE>
</HEAD>


<style>
body {
background-color: #E8EBF5;
}
</style>
<BODY>

<?php

$host = 'dany.simmons.edu';
$user = 'scheffm';
$password = '1651460';
$database = '33302sp16_scheffm';


$conn = mysql_connect($host,$user,$password) or die('unable to connect' . mysql_error($conn));

mysql_select_db($database,$conn) or die ('unable' . msql_error($conn));




$ColNum = $_POST["ColNum"];
$Name = $_POST["Name"];



$sql = "insert into MTG_CARD_INFO
  values($ColNum,'$Name',1,0)";

$sql2 = "insert into MTG_CARD_COLOR
  values($ColNum,6);";


$result = mysql_query($sql);
$result2 = mysql_query($sql2);



if ($result) {
echo "<br/>Your card has been added!";
echo "<br/><br/>";
mysql_free_result($result);
} else {
die ("There was a problem adding your card ". mysql_error(conn));
}


if ($result2) {

mysql_free_result($result2);
} else {
die ("There was a problem adding your card". mysql_error(conn));
}

$sql_1 = "select * from MTG_CARD_INFO";
$sql_2 = "select * from MTG_CARD_COLOR";

$result_1 = mysql_query($sql_1); 
$result_2 = mysql_query($sql_2); 

 

?> 
</body>
</html>