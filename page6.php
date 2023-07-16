<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6.[POST]Form Input 2 Number Send then Multiply(*) and Show summary format number to 4 digits</title>
</head>

<body>
    <h2>6.[POST]Form Input 2 Number Send then Multiply(*) and Show summary format number to 4 digits</h2>
    <form action="resultPOST.php" method="post">
        <input type="hidden" name="page" value="6">
        <input type="text" name="num1" placeholder="Number 1 Value">
        <label for="">*</label>
        <input type="hidden" name="op" value="*">
        <input type="text" name="num2" placeholder="Number 2 Value">
        <input type="submit" value="Multiply">
    </form>
</body>

</html>