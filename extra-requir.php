<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!-- Used with id or unimportant information because it does not encrypt the data 
  and stores the data in the browser's memory. -->
    <form action="" method="get">
        <input name="name" placeholder="your name">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
if (isset($_GET['name'])) {
    if (!empty($_GET['name'])) {
        $name = htmlspecialchars($_GET['name']);
        echo "<h1>Hello $name </h1>";
    } else {
        echo "<h1>Hello Guest</h1>";
    }
}
?>