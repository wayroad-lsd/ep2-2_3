<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.[POST]Form Input Value and Send</title>
</head>
<body>
    <h2>4.[POST]Form Input Value and Send</h2>
    <form action="resultPOST.php" method="POST">
        <input type="hidden" name="page" value="4">
        <input type="radio" name="preName" value="Mr." checked>Mr. <input type="radio" name="preName" value="Miss ">Miss <input type="radio" name="preName" value="Ms.">Ms 
        <br>
        <input type="text" name="fName" placeholder="Name">
        <br>
        <input type="text" name="lName" placeholder="Last Name">
        <br>
        <input type="number" name="year"> ปี
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="submit" value="Send Value">
    </form>
</body>
</html>
