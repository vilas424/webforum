<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$name=$_POST['username'];
$pass=$_POST['password'];
$cpass=$_POST['conform-password'];
$nam=$_POST['YourName'];
$phnum=$_POST['Contact_Number'];
$email=$_POST['Email_Adress'];

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
if($pass==$cpass)
    {
mysql_query("insert into login (username,password,cpass,name,phno,email) values ('$name','$pass','$cpass','$nam','$phnum','$email')");
echo "<script>window.location.assign('pop.html')</script>";
    }
    else
        {
        print '<script>';
       print 'alert("conform the password correctly");';
print '</script> ';
        echo "<script>window.location.assign('register.html')</script>";
       
        }

?>
