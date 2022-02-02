<?php
/*
//database init
    $db_host="localhost";
    $db_user="root";
    $db_pass=''; //null
    
    $db_connect = new mysqli($db_host,$db_user,$db_pass);

    if($db_connect -> connect_error){
        die("hey failed db connect".$db_connect->connect_error);
    }
    echo "mysql db connected";
     
    if($db_connect->query(" create database wiz"))
     {
         echo "database created successfully";
     }
     else{
         echo "database creation failed";
         exit();

     }
     $db_connect->close();

create 
alter 
drop
modify



     */
//create table name employee contains empId, empname,empsalary,empemail

$db_host="localhost";
$db_user="root";
$db_pass=''; 
$db_name= 'wiz';

$db_connect = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($db_connect -> connect_error){
    die("hey failed db connect".$db_connect->connect_error);
}
echo "mysql db connected";

if($db_connect->query("create table employee(empID int not null auto_increment,
empName varchar(40) not null,
empSal double(10) not null,
empMail varchar(40) not null, 
primary key(empID);"))
{
    echo "database created successfully";
}
else{
    echo "database creation failed";
    exit();

}
$db_connect->close();
  
  
  
?>