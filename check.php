<?php
$u=$_GET['t1'];
$p=$_GET['t2'];
$c=mysqli_connect('localhost','root','','final');
$q="select * from login where username='$u' and password='$p'";
$rs=mysqli_query($c,$q);
if($row=mysqli_fetch_array($rs))
{
include "log.php";
}
else
{
echo"invalid";
}
?>
