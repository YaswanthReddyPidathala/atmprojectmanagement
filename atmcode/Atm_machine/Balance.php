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
            <li>Enter PIN No:<input type="password" name="pinno"></li>
        </ul>
        </p>
        <div class="continue_btn">
            <input class="btn btn-default" type="submit" name="submit" value="Continue"
            >
           
            </div>
        </form>
        <br>
        <br>
        </div>
    </body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{	
		
        
		//$res=mysqli_query($db,"SELECT * FROM `customer` WHERE cardno ='$_POST[cardno]') ;");
		$res = $db->query("SELECT balance FROM customer WHERE pinno='$_POST[pinno]' ");
        if($res->num_rows)
        {
            $row=$res->fetch_array();
            $balance=$row['balance'];
            
            ?>
            <label>Balance Amount: </label><?php echo $balance; ?>
            <!-- <a href="Homepage.php" class="btn btn-primary">Back to Homepage</a> -->
            <html>
                <head><meta http-equiv="refresh" content="7;URL=Homepage.php">
        </head>
            </html>
            
            <?php
           
        }
        else
        {
            ?>
            <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
					<strong>Pin number is not matched</strong>
			</div>
                <?php
        }
	}


?> 