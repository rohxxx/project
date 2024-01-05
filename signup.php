<html>
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect('localhost','root','')or die('not connected');
mysqli_select_db($con,'project')or die('not selected');
$sql="insert into sample values('$email','$password')";
mysqli_query($con,$sql);

?>
<head>
<script>
    // JavaScript code for redirecting after a certain number of seconds
    document.addEventListener('DOMContentLoaded', function() {
      // Set the number of seconds before redirecting
      var secondsBeforeRedirect = 1; // Change this to the desired number of seconds

      // Set the redirect function
      function redirect() {
        window.location.href = 'login.html';
      }

      // Set a timeout to call the redirect function after the specified time
      setTimeout(redirect, secondsBeforeRedirect * 1000);
    });
  </script>
 </head>


</html>     