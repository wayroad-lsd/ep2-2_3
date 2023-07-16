<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.[GET]Form Input 2 Number Send then Plus(+) and Show summary</title>
</head>

<body>
    <h2>2.[GET]Form Input 2 Number Send then Plus(+) and Show summary</h2>
    <form action="result.php" method="get">
        <input type="hidden" name="page" value="2">
        <input type="text" name="num1" placeholder="Number 1 Value">
        <label for="">+</label>
        <input type="hidden" name="op" value="+">
        <input type="text" name="num2" placeholder="Number 2 Value">
        <input type="submit" value="SUM">
    </form>
</body>

</html>