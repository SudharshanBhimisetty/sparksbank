<?php
  require_once("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank | Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8337bf64cd.js"></script>
    <link href="styles/view.css" rel="stylesheet">
</head>
<body> 
 
    <div class="main">
        <div class="header">
            <h1>Customers</h1>
        </div>

        <div class="links">
            <a class="btn btn-outline-dark ml-4" href="index.php">Home</a>
            <a class="btn btn-outline-dark ml-4" href="new.php">Add Customer</a>
            <a class="btn btn-outline-dark ml-4" href="transactions.php">Transactions</a>
        </div>

        <div class="payment-button">
          <button class="btn btn-dark btn-lg" onClick="myFormOpen()">Make a transaction</button>
          <form action="addTransaction.php" method="post" id="tryForm" style="display:none">
            <p  onClick="myFormClose()">X</p>
            <div class="form-group">
                <label for="sender">Sender:</label>
                <input type="text" class="form-control" id="sender" placeholder="Sender Name" name="sender">
            </div>
        
            <div class="form-group">
                <label for="receiver">Receiver:</label>
                <input type="text" class="form-control" id="receiver" placeholder="Receiver Name" name="receiver">
            </div>
        
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount"  name="amount">
            </div>
        
            <button class="btn btn-outline-light btn">Submit</button>
          </form>
        </div>   
    </div>


        <script>
            function myFormOpen(){
                document.getElementById("tryForm").style.display="block"
            }
            function myFormClose(){
                document.getElementById("tryForm").style.display="none"
            }
        </script>
        

        <div class="container">
            <table width="100%">
                <tr class="table-heading">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Branch</th>
                    <th>Balance</th>
                </tr>

                <?php
                    $num = 1;
                    $x = "SELECT * FROM customers";
                    $result = mysqli_query($con,$x);
                     while($row = mysqli_fetch_assoc($result)){
                          echo "<tr><td>";
                          echo $num++;
                          echo "</td><td>";
                          echo($row['name']);
                          echo "</td><td>";
                          echo($row['email']);
                          echo "</td><td>";
                          echo($row['branch']);
                          echo "</td><td>";
                          echo($row['balance']);
                          echo "</td></tr>";
                      }   
                ?>
            </table>
        </div>


        <div class="footer">
            <h6>Made by Sudharshan</h6>
            <div class="footer-icons">
                <a href="https://github.com/SudharshanBhimisetty?tab=repositories" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/sudharshan-bhimisetty-19a8241aa/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
   
    

</body>
</html>