<?php
require('dbconnect.php');

$sql = "SELECT * FROM user ORDER BY username ASC";
$result=mysqli_query($connect,$sql);

$count=mysqli_num_rows($result);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สภาการพยาบาล ขอเชิญร่วมถวายสัตย์ปฏิญาณเพื่อเป็นข้าราชการที่ดีและพลังของแผ่นดิน</title>
    <link rel="shortcut icon" type="img/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="text-center">สภาการพยาบาล</h1>
    <hr>
  
    <?php  if($count>0) {?>
    <div class="alert alert-success">
        <b>ระบบได้รับข้อมูลของท่านเรียบร้อยแล้ว<b>
    </div>
    <?php } ?>
    <a href="insertForm.php" class="btn btn-success">โปรดคลิ๊กเพื่อกลับสู่เว็บไซต์</a>
    </form>
    </div>
</body>


<script>
function checkAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=true;
    }
}
function uncheckAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=false;
    }
}
</script>
</html>