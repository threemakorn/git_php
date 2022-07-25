<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$username=$_POST["username"]; 
$position= $_POST["position"];
$agency=$_POST["agency"];



// บันทึกข้อมูล
$sql = "INSERT INTO user(username,position,agency) VALUES('$username','$position','$agency')";

$result=mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo myqli_errors($connect);
}

?>