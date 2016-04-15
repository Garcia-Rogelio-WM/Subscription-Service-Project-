<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="Stylesheet.css">
    <meta charset="UTF-8">
    <title>Random boxs</title>
</head>
<div id="all">
    <body>
    <!-- Title -->
    <h1 style="text-align: center; font-size: 300%">Random Box Package</h1>
    <div id="wrapper">

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">All products</a></li>
                <li><a href="#">Bios</a></li>
                <li><a href="signin.php">Sign in</a></li>
            </ul>
        </nav>

    </div>
    <?php
    include_once('Connector.php');
    session_start();
    if(isset($_SESSION['userName'])!="")
    {
        header("Location: sign in.php");
    }
    $error = false;
    $success = false;

    if(@$_POST['signup']) {

        if(!$_POST['username']){
            $error .= '<p>Username is a required field!</p>';
        }

        if(!$_POST['pass']){
            $error .= '<p>Password is a required field!</p>';
        }

        $query = $dbh->prepare("SELECT * FROM Userz WHERE username = :username AND password = :password");
        $result = $query->execute(
            array(
                'username' => $_POST['username'],
                'password' => $_POST['pass']
            )
        );
        if ($result) {
            $_SESSION['uname'] = $_POST['username'];
            $success = "Userz, " . $_POST['username'] . " was successfully logged in.";
            header("Location: index.php");



        }
        else {
            $success = "There was an error logging into the account.";
        }
    }

    ?>
    <h2 style="text-align: center">Sign in</h2>
    <div id="sign" style="text-align: center">
        <form action="login.php" method="post">
            <p>User name</p>
            <input type="text" name="username" required>
            <p>Password</p>
            <input type="text" name="password" required>
            <br>
            <button type="submit" name="signup" value="1">Sign in</button>
            <br>
            <a href="createAccount.php" id="nyam">Don't have account?</a>
        </form>
    </div>

    </body>
</div>
</html>
