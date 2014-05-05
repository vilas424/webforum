<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$name=$_POST['username'];
$pass=$_POST['password'];
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
$res=mysql_query("select username,password from login where username='$name' and password='$pass'");

$rows=mysql_num_rows($res);

if((mysql_num_rows($res))==0)
    {
    print '<script>';
       print 'alert("invalid password,username");';
print '</script> ';
echo "<script>window.location.assign('login.html')</script>";
        
    }
    else {echo "<script>window.location.assign('pop.html')</script>";}
 
?>
