<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สภาการพยาบาล ขอเชิญร่วมถวายสัตย์ปฏิญาณเพื่อเป็นข้าราชการที่ดีและพลังของแผ่นดิน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body >
    <br>
<h2 align="center"><font color="#063979">คำถวายสัตย์ปฏิญาณเพื่อเป็นข้าราชการที่ดีและพลังของแผ่นดิน</font></h2>
<br>
<div class="form-group" align="center"  >
        <img src="img/banner_904.png" width="1000" height="auto" >
    </div>
    <div class="container my-3">
        <!-- <h2 class="text-center">คำถวายสัตย์ปฏิญาณเพื่อเป็นข้าราชการที่ดีและพลังของแผ่นดิน</h2> -->
        
        <form action="insertData.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-3" >          
            </div>
            <div class="form-group col-md-6" >
                <label for="username"><b>ข้าพระพุทธเจ้า<font color="red">*</font></b></label>    
                <input type="text" name="username" id="" class="form-control" placeholder="ชื่อ-นามสกุล" required>
            </div>
            <div class="form-group col-md-2" >          
            </div>
            <div class="form-group col-md-3" >          
            </div>
            <div class="form-group col-md-6" >
                <label for="position"><b>ตำแหน่ง</b></label>    
                <input type="text" name="position" id="" class="form-control" placeholder="ตำแหน่ง (ถ้ามี)" >
            </div>
            <div class="form-group col-md-2" >          
            </div>
            <div class="form-group col-md-3" >          
            </div>
            <div class="form-group col-md-6" >
                <label for="agency"><b>หน่วยงาน</b></label>    
                <input type="text" name="agency" id="" class="form-control"placeholder="หน่วยงาน (ถ้ามี)" >
            </div>
        </div>
        <div class="form-group text-center" >
            <input type="submit" value="ส่งคำถวายสัตย์ปฏิญาณ" class="btn btn-primary">
        </div>
        </form>
    </div>
</body>
</html>