
<?php
require('Connector.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">
    <meta charset="UTF-8">
    <title>Random boxs</title>
</head>
<body>
<!-- Title -->
<h1 style="text-align: center; font-size: 300%">Random Box Package</h1>
<div id="wrapper">

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">All products</a></li>
            <li><a href="#"><?php
                    echo $_SESSION['uname']
                    ?></a></li>
            <li><a href="#">Sign in</a></li>
        </ul>
    </nav>

</div>
<table>
    <tr>
        <td><img  src="box3.jpg" style="height: 500px; width: 700px;"></td>
        <td><h1></h1></td>
    </tr>
</table>
<br>
<table border="2px" style="text-align: center;">

    <tr>
        <td><h1>1 month</h1><h2>$100 + s/h</h2><button>Buy</button></td>
        <td><h1>3 month</h1><h2>$270 + s/h</h2><button>Buy</button></td>
        <td><h1>6 month</h1><h2>$400 + s/h</h2><button>Buy</button></td>
        <td><h1>1 year</h1><h2>$700 + s/h</h2><button>Buy</button></td>

    </tr>

    <tr><td><img src=""></td></tr>

</table>


</body>
</html>