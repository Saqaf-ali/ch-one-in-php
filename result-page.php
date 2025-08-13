<?php

//  Receive the data from form post
if (isset($_POST['name']) && isset($_POST['color-favorite'])) {
    if (!empty($_POST['name']) && !empty($_POST['color-favorite'])) { //Data validation
        // Data filter
        $name = htmlspecialchars($_POST['name']);
        $color = htmlspecialchars($_POST['color-favorite']);
        echo "<h1 style='color:$color;' >Hi $name, your favorite color is $color</h1>";// Data display
        // This message will be displayed if the data is not valid
    } else {
        echo "<h1>please fill the form</h1>";
    }
} else {
    echo "<h1>please fill the form</h1>";
}
