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
    <!-- <div class="logo"><img src="""></div> -->
    <h1>Online Grocery Store</h1>

		<a href="login.php">
			<img src="image/logout.svg" style=" 
		                                            width: 32px;
		                                            float: right;
		                                            margin-top: -70px;
		                                            margin-right: 42px; ">
		</a>

    <menu><ul>
			<div class="menu-container">
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="contact.html">Contact Us</a></li>
		
		
				<li><a href="login.php">Login</a></li>
				<li><a href="registration.php">Register</a></li>
				<li>
					<form class="example" action="search.php" method="post">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</li>
		
			</div>
		</ul>

    </menu>
  </header>
  <main>

            
            <div id="courses">
            	<h1>Collected Items</h1>

							<div class="row">
								<div class="col-6">
																	
            			<h2>Potatoes</h2>
									<h4>$2</h4>
									
								</div class="col-6 " >
									<h4>Total Price: $2</h4>
								<div>
								
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