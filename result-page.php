<?php

//  Receive the data from form post
if (isset($_POST['name']) && isset($_POST['color-favorite'])) {
    if (!empty($_POST['name']) && !empty($_POST['color-favorite'])) { //Data validation
        // Data filter
        $name = htmlspecialchars($_POST['name']);
        $color = htmlspecialchars($_POST['color-favorite']);
   
        // This message will be displayed if the data is not valid
    } else {
      
    }
} else {
   
}
