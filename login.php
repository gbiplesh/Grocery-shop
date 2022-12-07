<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Grocery Store</title>
  <link href="css/main.css" rel="stylesheet">
  
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<body>
  <div id="wrapper">
  <header>
    <!-- <div class="logo"><img src="image/logo.jpg"></div> -->
    <h1>Online Grocery Store</h1>
    
    <menu>
      <ul>
          <div class="menu-container" >
        <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
        <li><a href="about-us.php">About Us </a>
    
    
        <li><a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a></li>
        <li><a href="registration.php">Register</a></li>
        <li> 
          <form class="example" action="#">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </li>
    

        </div>
      </ul>

    </menu>
  </header>
  <main>
<div id="login" class="form-div">

      
    <?php
            
      if(isset($_POST["submit"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
      
      
    require 'config.php';

      $sql = "SELECT * FROM users";

        $query =  mysqli_query($conn , $sql ) 
        or die("Failed to query database".mysql_error());



      if (mysqli_num_rows($query) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($query)) {
          
            if ($row['username'] == $username && $row['password'] == $password) {

              if ($row['admin'] == 0) {
                header('Location: shop.html');
              } else {
                header('Location: admin.php');
                
              }
            
              exit;

            }
          }

          echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";

      }
     mysqli_close($conn);    
      
    }
      
    ?>


    <h1>-- Login Form --</h1>
<div class="container">
    <div class="row">
        <h1 class="text_green"></h1>
        <form name="login_form" id="login_form" action="" method="post">

           
                    <label for="username" > Username </label>

                    <input data-validate="username" name="username" type="username" id="username"
                           
                           placeholder="Username"
                           required>
               

           
                    <label for="password" > Password </label>

                    <input name="password" type="password"  id="password"
                           placeholder="Password" required>
               
           
                    <button name="submit" type="submit" class="btn-login"> Login</button>
                    <p id="forgot_password" ><center><a href="#" style="text-decoration: none; color: inherit;">Forgot password?</a></center></p>
               
               
        </form>
    </div>
</div>
</div>

</main>
    <footer>
        <h2>&copy; Online Grocery Store</h2>
        <p style="color: white; ">233 Castlereagh St, Sydney NSW 2000</p>
    </footer>
</div>
</body>
</html>