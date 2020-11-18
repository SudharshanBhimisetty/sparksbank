<?php
  require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank | Add Customer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/8337bf64cd.js"></script>
    <link href="styles/new.css" rel="stylesheet">
</head>
<body> 

    <div class="header">
       <h1>Add New Customer</h1>
    </div>
    
    <a class="ui basic inverted button black ml-4" href="index.php">Home</a>
    <a class="ui basic inverted button black ml-4" href="view.php">View Customers</a>
    <a class="ui basic inverted button black ml-4" href="transactions.php">Transactions</a>

    <div class="ui main text container segment" id="box" style="width:40%">

            <form class="ui form" action="addUser.php" method="post">
                <div class="field">
                    <label>NAME</label>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div class="field">
                    <label>EMAIL</label>
                    <input type="email" name="email" placeholder="name@gmail.com">
                </div>
                <div class="field">
                    <label>BRANCH</label>
                    <input type="text" name="branch" placeholder="">
                </div>
                <div class="field">
                    <label>INITIAL BALANCE:</label>
                    <input type="number" name="balance" placeholder="10000">
                </div>
                <div class="field">
                    <button class="ui basic button black">Submit</button>
                    
                </div>
            </form>

    </div>

     
    <div class="footer" id="foot">
         <h6>Made By Sudharshan</h6>
         <div class="footer-icons">
         <a href="https://github.com/SudharshanBhimisetty?tab=repositories" target="_blank"><i class="fab fa-github"></i></a>
         <a href="https://www.linkedin.com/in/sudharshan-bhimisetty-19a8241aa/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
     </div>
     



</body>
</html>