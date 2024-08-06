<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
    <?php
    $login= $_POST['login'];
    $pwd= $_POST['pwd'];

    if($login=="admin" &  $pwd=="ad1234") {
        echo "ยินดีต้อนรับคุณ ADMIN";
    } else if($login=="member" & $pwd=="mem1234"){
        echo"ยินดีต้อนรับคุณmember";

    } else{
        echo "ชื่อบัญชีของท่านไม่ถูกต้อง";
    }

    echo"<br><a href='index.php'>กลับไปหน้าหลัก</a>"
    

    ?>
    </div>

</body>
</html>