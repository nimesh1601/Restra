<?php
$mysql_host='localhost';
$mysql_user='root_user';
$mysql_password='root-password';
$conn = mysqli_connect($mysql_host,$mysql_user, $mysql_password,'hotel');

if(!$conn)
{
echo "not able to connect";
}
else
{
//echo"connection established";
}

?>
