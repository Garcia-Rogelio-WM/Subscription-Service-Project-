
<?php
require('Connector.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                    echo $_SESSION['uname'];
                    ?></a></li>
            <li><a href="signin.php" id="signin">
                    <?php
                    if ($_SESSION['uname']){
                        echo "Sign Out";
                    }
                    else {
                        echo "Sign in";
                    }
                    ?>
                </a></li>
        </ul>
    </nav>

</div>
<h1 style="text-align: center; font-size: 300%">Profile</h1>
<h2>Welcome, <?php echo $_SESSION['uname'];?></h2>


</body>

</html>