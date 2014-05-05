<html>
    <body>
        <img src="black-white.jpg" width="1500px" height="800px"
    </body>
</html>
<?php

$name1=$_POST['name2'];
$email=$_POST['email'];
$dbc=mysql_connect('localhost','root','root');
if(!$dbc)
{
	die('Not connected:'.mysql_error());
}
//select database
$db_selected=mysql_select_db("wtend",$dbc);
if(!$db_selected)
{
die("cannot connect:".mysql_error());
}

$result=mysql_query("select name,date1,fromm,status from schedule where name='$name1' and email='$email'");
$var=$result['status'];
echo "<table border style = position:absolute;left:600px;top:30px; cellpadding=10>";
echo "<th>"; echo "Name"; echo"</th>";
echo "<th>"; echo "Date"; echo"</th>";
echo "<th>"; echo "Time"; echo"</th>";
echo "<th>"; echo "Status"; echo"</th>";
$num1=mysql_num_rows($result);
$j=0;
while ($row = mysql_fetch_array($result))
{

echo "<tr bgcolor=black>";
 echo "<td> <font color=white>  $row[0] </font> </td>";
  echo "<td> <font color=white>  $row[1] </font> </td>";
   echo "<td> <font color=white>  $row[2] </font> </td>";
    echo "<td> <font color=white>  $row[3] </font> </td>";
 
echo"</tr>";
}
echo "</table>";

?>
