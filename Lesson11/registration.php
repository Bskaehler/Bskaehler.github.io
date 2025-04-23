<html>
   <head>
   <title>Tuition Receipt</title>
   <link rel ="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
   <h1>Tuition Receipt</h1>

   <?php
      $server = "hermes.waketech.edu";
      $user = "bskaehler";
      $pw = "csc124";
      $db = "bskaehler";
      $port = "3386";

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

      $connect = mysqli_connect($server, $user, $pw, $db, $port);
      if(!connect)
      {
         die("ERROR: Cannot connect to database $db on server $server using name $user (".mysqli_connect_errno().")");
      }

      $userQuery = "SELECT firstName, lastName FROM personnel WHERE jobTitle = 'Manager'";
      $result = mysqli_query($connect, $userQuery);
      
      if (!$result)
      {
         die("Could not successfully run query ($userQuery) from $db: ".mysqli_error ($connect));
      }

      if (mysqli_num_rows($result) == 0)
      {
         print ("No records found with query $userQuery");
      }
      else
      {
         print("<p> Please contact program manager(s) if you have any questions:</p>");
         while($row = mysqli_fetch_assoc($result))
         {
            print("<p>".$row['firstName']." ".$row['lastName']."</p>");
         }
      }

      mysqli_close($connect); 
   ?>

   <br><br>
   <a href="course.html">Back to Courses</a>
   </body>
</html>

