//perform query
<?php
$db_host="localhost";
$db_user="root";
$db_pass=''; 
$db_name= 'wiz';

$db_connect = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($db_connect -> connect_error){
    die("hey failed db connect".$db_connect->connect_error);
}
echo "mysql db connected";
















?>