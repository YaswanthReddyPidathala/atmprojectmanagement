<?php
include"Connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <div class="heading">
        <marquee behavior="scroll" direction="right" scrollamount = "10" >
            <h1>
                Welcome to ATM
            </h1>
        </marquee>
    </div>
        <title>
            ATM 
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <hr>
    <body style="background-image: url('atmimg.jpg');background-size:cover">
        <div class="card_no" >
        <form action="#"method="POST">
        <p><ul>
            <li>Enter Data</li><br>
            <li>Enter Card No: <input type="text" name="cardno"></li>
            <li>Enter PIN No:<input type="password" name="pinno"></li>
            <li>Enter BALANCE:<input type="text" name="balance"></li><br>
        </ul>
        </p>
        <div class="continue_btn">
            <input class="btn btn-default" type="submit" name="submit" value="Continue"
            >
           
            </div>
        </form>
        </div>
    </body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{	
		$count=0;
		$res=mysqli_query($db,"INSERT INTO `customer`(cardno,pinno,balance) VALUES ('$_POST[cardno]','$_POST[pinno]','$_POST[balance]') ;");
			?>
            <div class="alert alert-success" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
					<strong>Data inserted successfully</strong>
			</div>
				<script type="text/javascript"> 
					window.location="Homepage.php"
				</script>
			<?php
	}


?> 