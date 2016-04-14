<?php
session_start();
include_once('Connector.php');
$error = false;
$success = false;
if(@$_POST['signup']){
    if(!$_POST['firstn']){
        $error .= '<p>First name is required!</p>';
    }
    if(!$_POST['lastn']){
        $error .= '<p>Last name is required!</p>';
    }
    if(!$_POST['username']){
        $error .= '<p>Username is required!</p>';
    }
    if(!$_POST['pass']){
        $error .= '<p>Password is required!</p>';
    }
    $query = $dbh->prepare("INSERT INTO Userz (id, firstname, lastname, username, password) VALUES (:id, :firstname, :lastname, :username, :password)");
    $result = $query->execute(
        array(
            'id' => NULL,
            'firstname' => $_POST['firstn'],
            'lastname' => $_POST['lastn'],
            'username' => $_POST['username'],
            'password' => $_POST['pass']
        )
    );

    if($result) {
        $success = "firstname, " . $_POST['username'] . " was successfully created";
        $_SESSION['registered'] = 1;

    } else{
        $success = "There was an error creating the account!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="Stylesheet.css">
    <meta charset="UTF-8">
    <title>Random Box</title>


</head>

<body>

<h1 style="text-align: center; font-size: 300%">Random Box Package</h1>
<div id="wrapper">

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">All products</a></li>
            <li><a href="#"><?php
                    echo $_SESSION['uname'];
                    ?></a></li>
            <li><a href="sign%20in.php" id="signin">
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
<h2 style="text-align: center">Sign up</h2>
<div id="signup" style="text-align: center">
    <form method="post" name="signup">
        <p>First name</p>
        <input type="text" name="firstn" required>
        <p>Last name</p>
        <input type="text" name="lastn" required>
        <p>Username</p>
        <input type="text" name="username" required>
        <p>password</p>
        <input type="text" name="pass" required>
        <br>
        <button type="submit" name="signup" value="1">Sign up</button>
    </form>
    <br>
    <?php
    if($error){
        echo $error;
    }
    if($success){
        echo $success;
    }
    ?>

</div>




</div>
</div>
</body>
</html>