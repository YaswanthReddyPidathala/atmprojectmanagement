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
    <!-- <style>
    body{
        
    }
    </style> -->
    </head>
    <hr>
    <body style="background-image: url('atmimg.jpg');background-size:cover"><a href="admin.php"><button style="float: right;margin-right:10px">Admin</button></a>
        <div class="card_no" >
        <form action="#"method="POST">
        <p><ul>
            <li>Enter your Personal Account Details</li><br>
            <li>Enter Card No: <input type="text" name="cardno"></li>
            <li>Enter PIN No:<input type="password" name="pinno"></li>
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
		//$res=mysqli_query($db,"SELECT * FROM `customer` WHERE cardno ='$_POST[cardno]') ;");
		$res = $db->query("SELECT * FROM customer WHERE cardno='$_POST[cardno]' ");
        if($res->num_rows)
        {
        ?>
        <script type="text/javascript">
					window.location="Mainmenu.php";
				</script>
                <?php
        }
        else
        {
            ?>
            <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
					<strong>Data is not matched</strong>
			</div>
                <?php
        }
	}


?> 