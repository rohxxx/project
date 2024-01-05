<html>
    <head>
      <center>
        <style>
        /* HTML: <div class="loader"></div> */
.loader {
  height: 150px;
  width: 100px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding:50px;
  gap: 15px;
}

.dot-two {
  background-color: black;
  height: 300px;
  width: 30px;
  border-radius: 50%;
  padding: 4px;
  color: white;
}

.dot-one,
.dot-three {
  background-color: black;
  height: 30px;
  width: 20px;
  border-radius: 50%;
  text-align: center;
  animation: flap-wings 1s infinite ease-in-out;
}

.dot-two {
  position: relative;
  height: 30px;
  width: 30px;
  border-radius: 50%;
  background-color: black;
  animation: flap-wings 1s infinite ease-in-out;
  animation-delay: 0.1s;
}

.dot-two::before,
.dot-two::after {
  content: "";
  position: absolute;
  background-color: black;
}

.dot-two::before {
  height: 20px;
  width: 10px;
  bottom: 20px;
  left: 1px;
  border-radius: 50% 50% 0 0;
  transform: rotate(-20deg);
}

.dot-two::after {
  height: 20px;
  width: 10px;
  bottom: 20px;
  left: 19px;
  transform: rotate(20deg);
  border-radius: 50% 50% 0 0;
}

.dot-one::before,
.dot-one::after,
.dot-three::before,
.dot-three::after {
  content: "";
  position: absolute;
  background-color: white;
}

.dot-one::before,
.dot-three::before {
  height: 30px;
  width: 20px;
  top: 10px;
  left: 0;
  background-color: #e8e8e8;
 /*chnage this if u need dark mode to #212121 if need light mode #e8e8e8*/
  border-radius: 50% 50% 0 0;
}

@keyframes flap-wings {
  0%,
  100% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-20px);
  }
}
        
.motto {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
      margin: 0;
      font-family: 'Roboto', sans-serif;
      text-align: center;
      color: black;

    }

    .mottosize {
      font-size: 24px;
      font-weight: bold;
      line-height: 1.5;

    }
  </style>
  
</head>

<body>






  <?php
  $con = mysqli_connect('localhost', 'root', '') or die('not connected');
  mysqli_select_db($con, 'project') or die('not selected');


  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "select * from sample where Email='$email' and Password='$password'";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    echo ' <div class="loader">
 <div class="dot-one"></div> 
 <div class="dot-two">-  -</div> 
 <div class="dot-three"></div> 
</div>';

    echo '<div class="motto">
     <div class="mottosize">
     Sow Grow Thrive Harvest Repeat
     </div>
     </div>';

    echo "  <script>
     // JavaScript code for redirecting after a certain number of seconds
     document.addEventListener('DOMContentLoaded', function() {
       // Set the number of seconds before redirecting
       var secondsBeforeRedirect = 5; // Change this to the desired number of seconds
 
       // Set the redirect function
       function redirect() {
         window.location.href = 'pro.html';
       }
 
       // Set a timeout to call the redirect function after the specified time
       setTimeout(redirect, secondsBeforeRedirect * 1000);
     });
   </script>";




  } else {
    echo '<div class="motto">
        <div class="mottosize">
        Login was not successful
        </div>
        </div>';
    echo "  <script>
     // JavaScript code for redirecting after a certain number of seconds
     document.addEventListener('DOMContentLoaded', function() {
       // Set the number of seconds before redirecting
       var secondsBeforeRedirect = 5; // Change this to the desired number of seconds
 
       // Set the redirect function
       function redirect() {
         window.location.href = 'login.html';
       }
 
       // Set a timeout to call the redirect function after the specified time
       setTimeout(redirect, secondsBeforeRedirect * 1000);
     });
   </script>";
  }
  ?>

</html> 