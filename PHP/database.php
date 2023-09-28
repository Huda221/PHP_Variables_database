<?php
$DBname="DB1";
$DBuser="root";
$DBpass="";
$DBhost="localhost";

$connect = mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);

if($connect)
{
    echo "Database connect successfully";
}
else
{
    echo mysqli_error($connect);
}

?>