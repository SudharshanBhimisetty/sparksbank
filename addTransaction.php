<?php


if(isset($_POST["sender"]) && isset($_POST["receiver"]) && isset($_POST["amount"]) &&  strlen($_POST['sender']) > 1 && strlen($_POST['receiver']) > 1 &&  !empty($_POST['amount'])){

    require_once("connection.php");

    
    $sender = $_POST["sender"];
    $receiver = $_POST["receiver"];
    $amount = $_POST["amount"];
    
    
  date_default_timezone_set('Asia/Kolkata'); 

  $dt=date("h:i a d/m/Y");

    $a = "UPDATE customers SET balance = balance + $amount where name = '$receiver'";
    $b = "UPDATE customers SET balance = balance - $amount where name = '$sender'";
    $c = "INSERT INTO transactions(sender,receiver,amount,time) values ('$sender','$receiver','$amount','$dt')";

          
    if(mysqli_query($con,$a) && mysqli_query($con,$b) && mysqli_query($con,$c) ){
        header("location:transactions.php");
   }


}else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>