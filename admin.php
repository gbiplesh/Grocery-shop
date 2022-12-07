<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Grocery Store</title>
  <link href="css/main.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/table.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
  <div id="wrapper">
  <header>
    <!-- <div class="logo"><img src="image/logo.jpg"></div> -->
    <h1>Online Grocery Store</h1>

    
      <a href="login.php">
        <img src="image/logout.svg" style=" 
                                            width: 32px;
                                            float: right;
                                            margin-top: -70px;
                                            margin-right: 42px; ">
      </a>
    
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


<!-- Available Stocks -->

<div> 
		<?php
			require( 'config.php' );

				$query ="SELECT 
							* 
						FROM 
							products  
						WHERE
							status = '1'  
				";
				
				$result = mysqli_query($conn, $query );
				
				if ( $result && mysqli_num_rows($result) > 0 ) {
			?>	



    <h1 style="text-align: center;" > Available Stocks </h1>
    <table class="styled-table">
      <thead>
          <tr>
              <th>Item ID</th>
              <th>Item Names</th>
              <th>Prices</th>
              <th>Quantity Left</th>
          </tr>
      </thead>
      <tbody>
      
		<?php
					while($item = mysqli_fetch_assoc($result)) {

		?>
					<tr>
						<td><?php echo $item['id']; ?></td>
						<td><?php echo $item['name']; ?></td>
						<td><?php echo $item['price']; ?></td>
						<td><?php echo $item['amount']; ?></td>
					</tr>
		<?php
					}
				echo "</tbody>";
				echo "</table>";
				}

		?>

      <!-- </tbody> -->
  <!-- </table> -->
  <br>
</div>



<!-- Add Stocks -->

<div> 

    <?php
        // require 'config.php';
                        
            if(isset($_POST["add"])) {
            
              $product = $_POST['product_name'];
              $price = $_POST['product_price'];
              $amount = $_POST['product_amount'];
              
              
            $add = mysqli_query($conn, "INSERT INTO products (name, price, amount)
                                        VALUES ( '$product', '$price', '$amount');" 
                                 );   
                                         
              if(!$add) {
                die(mysqli_error($conn));
              } else {
                echo '<h1>Successfully Added!</h1>';
              }
            }
    
        ?>



    <h1 style="text-align: center;" > Add Stocks </h1>

    <form name="" id="register" action="" method="post" enctype="multipart/form-data">

        <table class="styled-table">
          <thead>
              <tr>
                <th>Product Name</th>
                <td> <input name="product_name" type="text"
                        placeholder="Enter Name"
                        required>
                </td>
              </tr>
              <tr>
                <th>Product Price</th>
                <td> <input name="product_price" type="text"
                        placeholder="Enter Price"
                        required>
                </td>
              </tr>
              <tr>
                <th>Product Amount</th>
                <td> <input name="product_amount" type="text"
                        placeholder="Enter Amount"
                        required>
                </td>
              </tr>
            </thead>
          </table>
          
          <div id="addProduct"><button name="add" type="submit">Add</button></div>
          
      
    </form>

        
</div>


</main>
    <footer>
        <h2>&copy; Online Grocery Store</h2>
        <p style="color: white; ">233 Castlereagh St, Sydney NSW 2000</p>
    </footer>
</div>
</body>
</html>