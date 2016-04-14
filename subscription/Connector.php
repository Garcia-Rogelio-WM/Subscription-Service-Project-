<?php
$hn = "localhost";
$pass = "root";
$name = "root";

try{
    $dbh = new PDO("mysql:host=$hn;dbname=sub", 'root', 'root');
    //echo 'we did it! :D';
}
catch(PDOException $you){
    echo $you->getMessage();
}

?>