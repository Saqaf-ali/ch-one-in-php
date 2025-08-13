
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>post form </h1>
    <!-- form -->
     <!-- result page == result form -->
    <form action="result-page.php" method="post">
        <input type="text" name="name" placeholder="your name">
        <input type="text" name="color-favorite" placeholder="your favorite color">
        <input type="submit" value="submit">
    
    </form>
</body>
</html><?php

// Display current date and time
echo date("Y-m-d H:i");
?>
