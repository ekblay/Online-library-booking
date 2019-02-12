<!DOCTYPE html >


<html>
<body>
<?php
// begin the session
session_start();

    // Initialize the books in the library into the Sessions_Array
    $books[1] ='A Ladder To The Sky: A Novel by John Boyne';
    $books[2] ='ALL THE LIVES WE NEVER LIVED: A NOVEL by Anuradha Roy';
    $books[3] = 'BECOMING by Michelle Obama';
    $books[4] ='THOSE WHO KNEW: A NOVEL by  Idra Novey';
    $books[5] = 'GOOD AND MAD: THE REVOLUTIONARY POWER OF WOMEN\'S ANGER BY Vivian Cornick';
    $books[6]='LAKE SUCCESS: A NOVEL by Barry Cohen';
    $books[7]= 'FASHION CLIMBING: A MEMOIR WITH PHOTOGRAPHS by Bill Cunningham';
    $books[8]= 'CRUDO: A NOVEL by Olivia Laing';
    $books[9]= 'AMERICAN LIKE ME: REFLECTIONS ON LIFE BETWEEN CULTURES by America Ferrera';
    $books[10]='CHERRY: A NOVEL by Nico Walker' ;
$_SESSION['books']  = $books;

// Set the style using css

print "<head>
    <meta charset = \"utf-8\">
    <title>KingsLanding Library</title>
    <style type = \"text/css\">
        p       { margin: 0px; }
       body {background-color: chocolate}
        label   { width: 5em; float: left; }
    </style>
</head>";
print "<h1> Welcome to Kingslanding Library</h1>
<h2> This is a new library that features a few new arrivals. In spite of our earnest effort to enlarge our inventory, we do have some new books we think you will love.</h2>
";
printStuff();
function printStuff()
{
    print  "<br><em>These are the books we have</em>";
    print "<br> Index:   Book and Writer";


    for ($i = 1; $i <=10; $i++)
    {
        $var = $_SESSION['books'][$i];
        print "<br><b>$i</b>:  $var";
    }


}

print"<h3> If You want to learn more about a book enter the index of the  book and click view </h3>";


print( " <form method = 'post' action = 'About.php' autocomplete='off'>
            <fieldset><legend>About</legend>");

print("<p>Index: <input type='text' name='Index'/></p>");

print( "<!-- create a submit button -->
            <p class = 'head'><input type = 'submit' name = 'submit'
            value = 'View'></p>" );
print"<h3>Or Checkout a book via this <a href = 'CheckOut.php'>link.</a></h3>"

?>
