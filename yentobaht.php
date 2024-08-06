<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $rate = 0.31;
    $y = $_GET['yen'];

    $baht=$y*$rate;
    echo "$y Yen = $baht Baht";
    ?>
    
</body>
</html>