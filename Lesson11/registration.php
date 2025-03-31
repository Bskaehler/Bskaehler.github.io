<!DOCTYPE html>
<html>
   <head>
   <title>Tuition Receipt</title>
   <link rel ="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
   <h1>Tuition Receipt</h1>

   <?php
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $numCourse = $_POST['numCourse'];

      $tuition = $numCourse * 200.00;

      print("<p>$fname $lname</p>");
      print("<p>You have registered $numCourse courses.</p>");
      print("<p>Your tuition is $".number_format($tuition,2).".</p>");
   ?>

   <br><br>
   <a href="course.html">Back to Courses</a>
   </body>
</html>

