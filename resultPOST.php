<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <h2>Result</h2>
    <?php
    $page = $_POST['page'];
    // 4
    if ($page == '4') {
        $preName = $_POST['preName'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $year = $_POST['year'];
        $year = $year - 543;
        $email = $_POST['email'];
    ?>
        <h3>Hello <?php echo $preName . $fName . ' ' . $lName ?></h3>
        <h3>Your age : <?php echo date("Y") - $year . ' ปี' ?> </h3>
        <h3>Email : <?php echo $email ?></h3>
    <?php
    }
    
    // 5
    if ($page == '5') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = $num1 - $num2;
        $op = $_POST['op'];
    ?> 
        <p><?php echo $num1 . $op . $num2 . ' = ' . $sum ?></p>
    <?php
    }
    ?>
    <?php
    // 6
    if ($page == '6') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = $num1 * $num2;
        $op = $_POST['op'];
    ?> 
        <p><?php echo $num1 . $op . $num2 . ' = ' . number_format($sum,4) ?></p>
    <?php
    }
    ?>
    <a href="index.html"><input type="button" value="Home"></a>
</body>

</html>