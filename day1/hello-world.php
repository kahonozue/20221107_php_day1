<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php echo "Hello, world!"; ?>
    <?php 
    $name = 'John Doe';
    echo "Hi there, $name";
    ?>

    <?php
    $rectangle = 2  *  4; // double spaces
    echo "The rectangle area is equal to $rectangle";

    echo "<br>" ;

    $greeting = "\$Good morning,\n as long as you do not use a semicolon,this statement can be many lines long,\t try it yourself"; // multiple lines
    echo $greeting;
    echo "<br>" ;
    ?>
    

    <!-- error example: case sensitive in the variable name; $course -->
<!-- <?php 
$course = "BackEnd";
echo "This chapter belongs to the $Course section";
//..Undefined variable: Course in ...

function printName($name){
   $surname= "Doe";
   print "My name is $name $surname";
}
PrintName("John");
?> -->

<?php 
$name = "John";

$surname = "Doe";

$age = 32;

echo "I" . " am" . " using" . " concatenation.<br>";
$sentence = "My name is " . $name . " " . $surname . ", and I am " . $age . " years old.<br>";

echo $sentence;

echo gettype($age) . "<br>";

echo gettype($sentence);
echo "<br>";
?>

<?php
$n = 2;  // define variable with global scope with value = 2

// function Local to test local scope
function local()
   {
   $n =  5;    // Define variable with same name,
             // but with local function scope and different value
   echo "The var \$n from the local() function = $n <br>";
   // $a will be interpreted and rendered as 5             
   }
local();         // call the function
echo "The var \$n from outside the function = $n <br>";
            // $a will be rendered as 2 from the beginning 
            ?>

            
<!-- <?php
// $name = 'John';
// $surname = 'Doe';
// function printNameTwo()
// {  
//    $fullName = $name . ' ' . $surname;
//    return $fullName;
// }
// echo printNameTwo();
// echo $fullName;
?> -->

<!-- arranging the example above by myself -->
<?php
$name = 'John';
$surname = 'Doe';
function printNameTwo($name, $surname)
{  
   $fullName = $name . ' ' . $surname;
   return $fullName;
}
echo printNameTwo($name, $surname);
echo "<br>";
// echo $fullName;
?>

<?php
$name = 'John';
$surname = 'Doe';
function printNameThree()
{
   global $name, $surname, $fullName;
   $fullName = $name . ' ' . $surname;
   return $fullName;
}
echo printNameThree()."<br>";
echo $fullName . "<br>";
?>

<!-- associative array -->
<?php
       /* Associating values at its creation */
       $salaries = array(
           "Mark" => 2000,
           "Anthony" => 1000,
           "Eric" => 500
       );
       echo "Salary of Mark is ". $salaries['Mark'] . "<br/>";
       echo "Salary of Anthony is " . $salaries['Anthony']. "<br/>" ;
       echo "Salary of Eric is ". $salaries['Eric'] . "<br/>";
       /* Replacing values using its keys */
       $salaries['Mark'] = 3000;
       $salaries['Anthony'] = 1500;
       $salaries['Eric'] = 800;
       echo "Salary of Mark is $salaries[Mark]<br/>";
       echo "Salary of Anthony is $salaries[Anthony]<br/>";
       echo "Salary of Eric is {$salaries['Eric']}<br/>" ;
       //Output:
       //Salary of Mark is 2000
       //Salary of Anthony is 1000
       //Salary of Eric is 500
       //Salary of Mark is 3000
       //Salary of Anthony is 1500
       //Salary of Eric is 800
?>

<!-- multiple associative array -->
<?php
       $marks = array(
           "Mark" => array
               (
               "Physics" => 35,
               "Maths" => 30,
               "Chemistry"  => 39
               ),
           "Anthony" =>  array
               (
               "Physics" => 30,
               "Maths" => 32,
               "Chemistry"  => 29
               ),
           "Eric" =>  array
               (
               "Physics" => 31,
               "Maths" => 22,
               "Chemistry" => 39
               )
           );
       /* Accessing multidimensional array values */
       echo "Marks for Mark in Physics: ";
       echo $marks['Mark']['Physics'] . "<br/>" ;
       echo "Marks for Anthony in Maths: ";
       echo $marks['Anthony']['Maths'] . "<br/>" ;
       echo "Marks for Eric in Chemistry: " ;
       echo "{$marks['Eric']['Chemistry']}<br/>";
       //Output
       //Marks for Mark in Physics: 35
       //Marks for anthony in Maths: 32
       //Marks for eric in Chemistry: 39
?>


</body>
</html>