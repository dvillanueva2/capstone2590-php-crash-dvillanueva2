<?php
    /* Conditionals / Control Sturctures */

    /* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if($age >= 18) 
// {
//     echo 'You are old enough to vote';
// }

// else
// {
//     echo 'Sorry, you are not old enough to vote';
// }

$t = date ("H");

// if($t < 12) 
// {
//     echo 'Good Morning';
// }

// elseif($t < 17) 
// {
//     echo 'Good Afternoon';
// }

// else
// {
//     echo 'Good Evening';
// }

$posts = ['First Post'];

// if(!empty($posts))
// {
//     echo $posts[0];
// }
// else
// {
//     echo 'No Posts';
// }

/* 
    Ternary Operator is the question mark - if variable does is not empty, execute the expression
    to the left of the question mark. 

    The colon is the else statment. The expression to the right of the colon will run if the 
    variable on the very left is empty.

    "Is it empty, execute the one to the right of the question mark. Else, execute the one to 
     the right of the colon."
*/
// echo !empty($posts) ? $posts[0] : 'No Posts';

    // $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
    // $firstPost = !empty($posts) ? $posts[0] : null; 
    // echo $firstPost;

    /* 
        Null Coalescing Operator (??) - will check for null values - if $posts[0] is empty, return null
    */

    // $firstPost = $posts[0] ?? null;

    // echo $firstPost;


    $favcolor = 'red';
    switch($favcolor)
    {
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is not red, green, or blue';
    }

    // continue at 42:37 - associative array
    /* <!-- Source Material: https://www.youtube.com/watch?app=desktop&v=BUCiSSyIGGU --> */
?>
