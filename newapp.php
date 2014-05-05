<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$name=$_POST['name'];
$date=$_POST['date'];
$category=$_POST['selecttag'];
$id=$_POST['email'];
$reason=$_POST['reason'];
$from=$_POST['frm'];
$ampm=$_POST['sel'];
$duration=$_POST['dur'];
$hrmin=$_POST['sell'];
$duration=(int)$duration;
if($hrmin=="min")
    {
 $to=$from.':'.$duration;
    }
else if($hrmin=="hr")
    {
    $from=(int)$from;
    $duration=(int)$duration;
    $to=$from+$duration;
}
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
//var $to=($frm +":"+$duration);
$result=mysql_query("select name from schedule where date1='$date' and fromm='$from'");
$num=mysql_num_rows($result);
if($num > 0)
    {
     print '<script>';
       print 'alert("Appointment already exists on this date ant time");';
print '</script> ';
}
else
{
$result1=mysql_query("insert into schedule(name,email,status,reason,fromm,duration,ampm,category,too,date1) values ('$name','$id','pending','$reason','$from','$duration','$ampm','$category','$to','$date')");


 print '<script>';
       print 'alert("Sucessfully inserted");';
print '</script> ';


}
?>
