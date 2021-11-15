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
        <style>
            .btn{
                outline: none; 
                display: block;
                border: 0;
                font-size: 16px;
                line-height: 1;
                padding:6px;
                border-radius: 30px;
                background-color: #00b0f0;
                margin-right: 590px;
                margin-left: 590px;
                color: #ffffff;
                cursor: pointer;
                transition: all 0.2s linear;
            }
            .btn:hover,
            .btn:focus{
                background: #005C99;
            }
            .btn:active{
                background: #003659;
            }
        </style>
    </head>
    <hr>
    <body>
    <a href="Homepage.php"><button style="float: right;margin-right:10px">Login</button></a>
        <div class="card_no" >
            <form action="#"method="POST">
        <p><ul>
            <li>Enter your Personal account details</li><br>
            <li>Admin ID: <input type="text" name="username"></li>
            <li>Password:<input type="password" name="password"></li><br>
        </ul>
        </p>
            <input type="submit"  class="btn" name="submit" value="Login"
            >
            </form>
        </div>
    </body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{	
		$count=0;
		$res=mysqli_query($db,"SELECT * FROM `admin`WHERE name='$_POST[username]' AND password='$_POST[password]';");
		$row= mysqli_fetch_assoc($res);
		$count=mysqli_num_rows($res);

		if($count==0)
		{
			?>
				<div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
					<strong>The username and password doesn't match</strong>
				</div>
				
			<?php
		}
		else
		{
			$_SESSION['login_user'] = $_POST['username'];

			?>
				<script type="text/javascript">
					window.location="Data.php"
				</script>
			<?php
		}


	}


?> 