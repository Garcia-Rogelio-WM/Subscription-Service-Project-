<?php
session_start();
include_once('Connector.php');
if(isset($_SESSION['userName'])!="")
{
    header("Location: Userz.php");
}

include_once('Connector.php');

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
        $success = "Userz, " . $_POST['username'] . " was successfully logged in.";
        header("Location: index.php");

        $_SESSION['uname'] = $_POST['username'];

    }
    else {
        $success = "There was an error logging into the account.";
    }
}

?>