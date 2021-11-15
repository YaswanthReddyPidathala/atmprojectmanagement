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
            <link rel="stylesheet" type="text/css" href="style1.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Mainmenu</h2>
        <table>
            <tr>
                <td></td>
                <td><a href="Withdraw.php"><button>Withdraw</button></a></td>
            </tr>
            <tr>
                <td>
                    <a href="Pinchange.php"><button>PIN Change</button></a>
                </td>
                <td>
                    <a href="Balance.php"><button>Balance</button></a>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <a href="Deposit.php"><button>Deposit</button></a>
                </td>
            </tr>
        </table>

    </body>
</html>