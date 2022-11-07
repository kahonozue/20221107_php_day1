<!-- http://localhost/php-exercises/day1/advanced/advanced.php -->

<!-- Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters 
(like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

Transform this code into a solution done with multidimensional arrays to track different properties of the characters. 
(hint: in order to output nicely (user friendly) your solutions on the browser you will need the HTML tags for it). -->
<?php

// associative array
$associative_array = array(
    "cartoon" => "MickeyMouse",
    "anime" => "Doraemon",
    "game" => "Mario"
);  

// echo "<p class='subtitle'>associative array</p>";
// "echo" doesn't necessary below cuz it means I'm doing "print_r" twice.
// echo print_r($associative_array) brings two results; result of "print_r($associative_array)" and result of "$associative_array".
// print_r($associative_array);
// echo "<br>";

// print_r($associative_array["cartoon"]);
// echo ",";
// print_r($associative_array["anime"]);
// echo ",";
// print_r($associative_array["game"]);
// echo "<br>";
// echo "<br>";


// multidimensional array
$multidimensional_array = array(
    "Mickey_Mouse" => array(
        "personality_one" => "helpful",
        "personality_two" => "leadership",
        "personality_three" => "enthusiastic"
    ),
    "Doraemon" => array(
        "personality_one" => "peaceful",
        "personality_two" => "honest",
        "personality_three" => "caring"
    ),
    "Mario" => array(
        "personality_one" => "one's own way",
        "personality_two" => "optimistic",
        "personality_three" => "brave",
    ),
);

// echo "<p class='subtitle'>multidimensional array</p>";
// print_r($multidimensional_array['Mickey_Mouse']["personality_one"]);
// echo ", ";
// print_r($multidimensional_array['Mickey_Mouse']["personality_two"]);
// echo ", ";
// print_r($multidimensional_array['Mickey_Mouse']["personality_three"]);
// echo "<br>";

// print_r($multidimensional_array['Doraemon']["personality_one"]);
// echo ", ";
// print_r($multidimensional_array['Doraemon']["personality_two"]);
// echo ", ";
// print_r($multidimensional_array['Doraemon']["personality_three"]);
// echo "<br>";

// print_r($multidimensional_array['Mario']["personality_one"]);
// echo ", ";
// print_r($multidimensional_array['Mario']["personality_two"]);
// echo ", ";
// print_r($multidimensional_array['Mario']["personality_three"]);;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/advanced.css">
    <title>advanced</title>
</head>
<body>
    <div class="contentBlock">
        <div class="characterBlock">
            <div>
                <?= $associative_array["cartoon"] ?>
                <img src="mickey_mouse.jpg" arc="micky mouse">
            </div>
        </div>
        <div class="characterBlock">
            <div>
                <?= $associative_array["anime"] ?>
                <img src="Doraemon.png" arc="doraemon">
            </div>
        </div>
        <div class="characterBlock">
            <div>
                    <?= $associative_array["game"] ?>
            <img src="mario.jpg" arc="mario">
            </div>
        </div>
    </div>

    
</body>
</html>