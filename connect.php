
<?php
$date=$_GET["q"];
$dbhandle = mysql_connect("localhost", "root", "root");
$selected = mysql_select_db("wtend",$dbhandle);
$result = mysql_query("SELECT fromm,too,ampm FROM schedule where date1='$date'");
$num1=mysql_num_rows($result);
$from="";
$row = mysql_fetch_array($result);
while($row = mysql_fetch_array($result))
{
$from = $from." ".$row[0]." ".$row[1]." ".$row[2]." ";
}
echo $from;
?>

