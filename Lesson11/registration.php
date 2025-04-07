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
      $major = $_POST['major'];
      $status = $_POST['status'];
	   $CSC120 = $_POST['CSC120'];
	   $CSC121 = $_POST['CSC121'];
	   $CSC154 = $_POST['CSC154'];

      if($status == "InState") {
         $tuition = $numCourse * 200.00;
      }
      else {
         $tuition = $numCourse * 500.00;
      }

      print("<p>$fname $lname</p>");
      print("<p>Your major is $major.</p>");
      print("<p>You are $status student.</p>");
      
      print("<p>You have registered $numCourse courses.</p>");
      if(isset($_POST['CSC120'])){
         print("CSC120 Computing Fundamentals<br>");
      }
      if(isset($_POST['CSC121'])){
         print("CSC121 Python Programming<br>");
      }
      if(isset($_POST['CSC154'])){
         print("CSC154 Software Development<br>");
      }   

      print("<p>Your tuition is $".number_format($tuition,2).".</p>");
   ?>

   <br><br>
   <a href="course.html">Back to Courses</a>
   </body>
</html>

