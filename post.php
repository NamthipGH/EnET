<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table th{
            background-color: #6CD2FE;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <?php
    $id = $_GET['id'];?>

    <div style="text-align: center;">
    <div style="text-align: center;"> ต้องการดูกระทู้หมายเลข <?php echo $id ?></div> <br>
    <?php
   
    $n=$_GET['id'];
    if(($n%2)==0) {
        echo "เป็นกระทู้หมายเลขคู่";
    }else{
        echo "เป็นกระทู้หมายเลขคี่";
    }
     
    ?>
    </div>
    <br>
    
     
    <table style="border:2px solid black; width:40%" align="center">
        <tr><th>แสดงความคิดเห็น</th></tr>
        <tr><td align="center"><textarea  name="massage" cols="80" rows="10"></textarea></td></tr>
        <tr><td colspan = "2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    
    </table>
    <br>
    <div align = "center"><a href ="index.php">กลับไปหน้าหลัก</a></div>
    


</body>
</html>