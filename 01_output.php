<!-- Any PHP code that I write will go in a <?php ?> tag -->
<!-- PHP logic is up on the top - for example to fetch something from the database and then ouput then output them down to the html -->
<?php
    // parses the text below to get it displayed in the browser
    echo 'Hello Beautiful by Dino Vilanueva The Handsome';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
</body>
</html>




<?php
    // -> Makes php comments
    // -> php starting and closing tags
    // echo - Output strings, numbers, html, etc
    // echo 123, 'Hello', 10.5;

    // print - Works like echo, but can only take in a single argument
    // print 123 -> using echo is recommended. don't use this if I don't have to
    
    // print_r() - Print single values and arrays
    print_r('[1,2,3]');
    
    //these are usually for debugging
    // var_dump() - Returns more info like data type and length
    // var_dump('Hello');
    // output to browser: string(5) "Hello"

    // var_dump(true);
    // output to browser: bool(true)
    
    // var_export() - Similar to var_dump(). Outputs a string representation of a variable
    // var_export('Hello')
    //output to browser: 'Hello'
?>

<!-- Source Material: https://www.youtube.com/watch?app=desktop&v=BUCiSSyIGGU -->

