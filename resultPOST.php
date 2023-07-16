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
    // 1
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
    ?>
    <a href="index.html"><input type="button" value="Home"></a>
</body>

</html>