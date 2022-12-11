<?php  


$servername = "localhost";
$username="root";
$password="";
$database="try1";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("Could not connect :".mysqli_connect_error());
} else {
    echo "\nconnection was suceesfully established";
}


// $sql = "CREATE DATABASE try1";
// $result=mysqli_query($conn, $sql);

// if($result){
//     echo "DAtabase connected successfully";
// }
// else{
//     echo "database not connected succesfully" . mysqli_error($conn);
// }

//create a table in db
// $sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL , `name` VARCHAR(11) NOT NULL , `tripdest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
// $sql = "INSERT INTO `phptrip` (`sno`, `name`, `tripdest`) VALUES ('2', 'gauri', 'mum')";
// $sql="DELETE FROM `phptrip` WHERE `phptrip`.`sno` = 2";
$sql = "SELECT * FROM `phptrip` WHERE `phptrip`.`sno`=1";
$result=mysqli_query($conn, $sql);



if($result){
    echo "tabele created successfully";
}
else{
    echo "table not created succesfully" . mysqli_error($conn);
}


?>