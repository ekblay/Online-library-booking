<
/**
 * Created by PhpStorm.
 * User: Emmanuel Blay
 * Date: 16/11/2018
 * Time: 13:46
 */
<!DOCTYPE html>


<html>
   <head>
      <meta charset = "utf-8">
      <title>CheckOut Feedback</title>
       <style type = "text/css">
           p {font-family: "Calibri Light"}
           body{background-color: crimson}
       </style>
      </head>
   <body>

</html>
   <?php
   session_start();
   if (isset($_POST['submit']))
   {
       $fName =$_POST["fName"] ? $_POST["fName"] : '';;
       $lName =$_POST["lName"] ? $_POST["lName"] : '';
       $index = $_POST["index"] ;

    $book = $_SESSION['books'][$index];
       print "<br><h2>Success $lName $fName<br>You have a checked out <em>$book</em></h2>";
       print"<h3> You can collect your book from the following address
                    <p>300 CastelyRock Road</p><p>Westurus,Ca</p>
                    <p>You may also reach as on 902 9177856</p>
                     <p>email: <a href = 'mailto:housestark@winterfell.com'> housestark@winterfell.com</a></p></h3>";
   }

   print"<h5>Go back to the <a href = 'index.php'>homePage.</a></h5>";

