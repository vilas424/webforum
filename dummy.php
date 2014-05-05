<html>
    <body>
<?php

//$date=$_GET["q"];
$date=13/5/2013;
$dbhandle = mysql_connect("localhost", "root", "root")
        or die("couldnt connect");
$selected = mysql_select_db("wtend",$dbhandle)
        or die("couldnt select");
$result = mysql_query("SELECT fromm,too FROM schedule where date1='$date'");
while($row = mysql_fetch_array($result))
{

$from =  $row['fromm']." ".$row['too']." ";
}
echo $from;
?>

 </body>
</html>