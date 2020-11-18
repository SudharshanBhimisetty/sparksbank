<?php
  require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8337bf64cd.js"></script>
    <link href="styles/index.css" rel="stylesheet">
</head>
<body>  

        <div class="heading text-center">
            <h1>Sparks Bank</h1>
            <p>Banking made Easy</p>
         </div>
     
         <div class="contents">
          
             <div class="content content-first">
                <a href="new.php">
                    <i class="fas fa-user-plus"></i>
                    <h6>Add User</h6>
                </a>
             </div>
           
           
          
             <div class="content">
                <a href="view.php">
                   <i class="fas fa-users"></i>
                   <h6>View Customers</h6>
                </a>  
             </div>
        
     
         
             <div class="content">
                <a href="transactions.php">
                     <i class="fas fa-coins"></i>
                     <h6>Transactions</h6>
                </a>  
             </div>
        
     
         </div>
     
     <div class="footer">
         <h6>Made By Sudharshan</h6>
         <div class="footer-icons">
            <a href="https://github.com/SudharshanBhimisetty?tab=repositories" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/sudharshan-bhimisetty-19a8241aa/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
     </div>
     

</body>
</html>