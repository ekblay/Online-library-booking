/**
* Created by PhpStorm.
* User: Emmanuel Blay
* Date: 16/11/2018
* Time: 23:35
*/
<!DOCTYPE html>

<!-- Fig. 2.3: links.html -->
<!-- Linking to other web pages. -->
<html>
<head>
    <meta charset = "utf-8">
    <title>Check Out</title>
</head>
<style type = "text/css">
    p       { margin: 0px; }
    body {background-color: coral}
</style>
<?php

print"<body>";

session_start();
function printStuff()
{
    //Creating a form for the checkout of the book
    print  "<br><em>These are the books we have</em>";
    print "<br> Index:   Book and Writer";
    for ($i = 1; $i <=10; $i++)
    {
        $var = $_SESSION['books'][$i];
        print "<br><b>$i</b>:  $var";
    }


}
printStuff();
print( "<h1>Check Out A Book</h1>
            <p>Please fill in all fields and click Register.</p>" );


/**
 * Form starts here
 */
print( " <form method = 'post' action = 'Feedback.php' autocomplete='off'>
            <fieldset><legend>CheckOut</legend>");
//Name fields
print("<p>First Name: <input type='text' name='fName'/></p>
                 <p>Last Name: <input type='text' name='lName'/></p>
                   ");

print("<p>Choose a Book");

print("<select name='index'> <option disabled>Select Book Index</option>");



    for ($k = 1; $k <=10 ; $k++)
    {

            print("<option value =$k>$k</option>");


    }


print( "<!-- create a submit button -->
            <p class = 'head'><input type = 'submit' name = 'submit'
            value = 'CheckOut'></p>" );
//The booking memo should have the customer’s name, room type, room number, and the price

