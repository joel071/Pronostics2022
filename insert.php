<?php
session_start();
$iduser = $_SESSION['iduser'];
$selectBar = filter_input(INPUT_POST, "selectBar", FILTER_VALIDATE_INT);
$selectBar1 = filter_input(INPUT_POST, "selectBar1", FILTER_VALIDATE_INT);
$id= $_POST['id'];
$NBpage=$_POST['NBpage'];
$equality='1';
$retour=$NBpage.'-matchs.html';
$equality='1';
$host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "match";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
  else if(!empty($selectBar)&&!empty($selectBar1)){
    $sql = "INSERT INTO matches (equipe1,equipe2,idMatch, iduser) VALUES ('$selectBar','$selectBar1','$id','$iduser')"; 

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        header("Location: $retour");
    }}
    header("Location: $retour");

    // close connection

?>