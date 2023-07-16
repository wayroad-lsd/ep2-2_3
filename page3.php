<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.[GET]Form Input 2 Number Send then Divide(/) and Show summary format number to 2 digits</title>
</head>

<body>
    <h2>3.[GET]Form Input 2 Number Send then Divide(/) and Show summary format number to 2 digits</h2>
    <form action="result.php" method="get">
        <input type="hidden" name="page" value="3">
        <input type="text" name="num1" placeholder="Number 1 Value">
        <label for="">/</label>
        <input type="hidden" name="op" value="/">
        <input type="text" name="num2" placeholder="Number 2 Value">
        <input type="submit" value="Divide">
    </form>
</body>

</html>