<?php




if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["branch"]) && isset($_POST["balance"]) && strlen($_POST['name']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['branch']) > 1 && !empty($_POST['balance'])){


    require_once("connection.php");
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $branch = $_POST["branch"];
    $balance = $_POST["balance"];
    
    $d = "INSERT INTO customers(name,email,branch,balance) VALUES ('$name','$email','$branch','$balance')";
    
             
     if(mysqli_query($con,$d) ){
           header("location:view.php");
           exit();
     }
      
    
    }
    
    
   else{
        header("location:new.php");
        exit();
   }

?>