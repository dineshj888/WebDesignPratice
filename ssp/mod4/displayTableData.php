<?php
//perform query

$db_host="localhost";
$db_user="root";
$db_pass=''; 
$db_name= 'wiz';

$db_connect = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($db_connect -> connect_error){
    die("hey failed db connect".$db_connect->connect_error);
}
echo "mysql db connected<br>";


$query1 ="create table employee(empID int not null auto_increment,
empName varchar(40) not null,
empSal double(10) not null,
empMail varchar(40) not null, 
primary key(empID);";



if($result = mysqli_num_rows ( mysqli_query($db_connect,"select * from employee")) >0)
{
   /* echo "table created successfull<br>".$db_connect->affected_rows;
    //echo "table created successfull<br>".$db_connect->num_rows; 

    if($mysqli_num_rows($result)){
        $result = $db_connect->store_result();
        $row = $result->fetch_array();
        echo "hello ".$row[1];
   
    
} */
    echo $result;
    //$result -> free_result();
}
else{
    echo "<br> table is empty or error <br>";
    exit();
}
 




/*if($result=$mysqli->query("select * from employee"))
 {
     echo "Returned rows are".$result -> num_rows;
     //free result set
     $result->free_result();
 }
$mysqli->real_query("select * from persions");

if($mysqli->field_count){
    $result=$mysqli->store.result();
    $row=$result->fetch_row();
    //free result set
    $result->free_result();
}

*/











$db_connect->close();


?>