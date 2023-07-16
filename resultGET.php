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
    $page = $_GET['page'];
    // 1
    if ($page == '1') {
        $preName = $_GET['preName'];
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        $year = $_GET['year'];
        $year = $year-543;
        $email = $_GET['email'];
    ?>
    <h3>Hello <?php echo $preName.$fName.' '.$lName?></h3>
    <h3>Your age : <?php echo date("Y")-$year.' ปี' ?> </h3>
    <h3>Email : <?php echo $email?></h3>
    <?php
    }
    // 2
    if ($page == '2') {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $sum = $num1 + $num2;
        $op = $_GET['op'];
    ?> 
        <p><?php echo $num1 . $op . $num2 . ' = ' . $sum ?></p>
    <?php
    }
    ?>
    <?php
    // 3
    if ($page == '3') {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $sum = $num1 / $num2;
        $op = $_GET['op'];
    ?> 
        <p><?php echo $num1 . $op . $num2 . ' = ' . number_format($sum,2) ?></p>
    <?php
    }
    ?>
    <a href="index.html"><input type="button" value="Home"></a>
</body>

</html>