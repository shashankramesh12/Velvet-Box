<!DOCTYPE html>
<html>
<head>
	<title>velvet Box</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<form action="index.php">
		<div>
			
			<input type="text" name="Name" id="Name" placeholder=" " required>
			<label for="Name">Name</label>
		</div>
		<div>
			
			<input type="tel" name="tel" id="tel" placeholder=" "
			pattern="^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$" required>
			<label for="tel">Phone No.</label>
			<div class="requirements"> Must be a valid Phone Number!</div>
		</div>
		<div>
			
			<input type="email" name="email" id="email" placeholder=" " required>
			<label for="email">Email</label>
			<div class="requirements"> Must be a valid email addres!</div>
		</div>
		<div>
			
			<input type="password" name="password" id="password" placeholder=" "
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
			<label for="password">Password</label>
			<div class="requirements"> Must be a valid password!</div>
		</div>
		<input type="submit" value="Sign up"/>
	</form>
	<!DOCTYPE Html>
<Html Lang="En">



<Body>

</Body>
</Html>
 <Script Src="velvet.js"></Script>
 
  <!DOCTYPE html>
  <html lang="en">
      <head>
          <title>VELVET BOX</title>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet">
  </head>
  <body>
  <html>
<head>
	<title>velvet Box</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <form method="post" action="index.php"></form>
        <div class="navbar">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">OUR BRAND</a></li>
                <li><a href="#">MUHURAT</a></li>
                <li><a href="#">JEWELLERY</a></li>
                <li><a href="#">SHOP ONLINE</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
        </div>
</head>
</body>
    
    
  </body>
  </html>
  </body>
  </html>
  <?php
    $Conn = mysqli_connect("localhost","root","");
    if(isset($_POST['login_btn'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $sql="SELECT * FROM Velvet Box.signup details WHERE username='$username'";
      $result password=$row['password'];
      if($password==$result password){
        header('Location:index.html');
      }
      else
      {
        echo "<script>
          alert('password incorrect')
        </script>"
        
      }
      }
     
  ?>
  

