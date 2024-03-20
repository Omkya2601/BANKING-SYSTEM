<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANKING SYSTEM</title>
    <link rel="stylesheet" href="style_customers.css">

</head>
<body>
    <div class="navbar">
        <center>
            <hr color="grey" width="70%" size="1">
            <h1>BASIC BANKING SYSTEM</h1>
            <a  href="index.php">Home</a>
            <a href="sendmoney.php">Send Money</a>
            <a class="active" href="customers.php">View All Customers</a>
            <a href="transactions.php">Transactions</a>
            <a href="contact.php">Contact Us</a>
            <a  href="about.php">About Us</a>
            <hr color="grey" width="70%" size=1 >   

        </center>
    </div >
    <div class="container">
        <div class="header">Welcome to Sparks Bank!</div>
        <img src="bank.png" height="65%" width="30%" alt="welcome to the sparks bank!" style="padding:5px;margin-right:8vw;margin-top:8vh;float:right">
</div>
<center>
    <div class="contentbox" cellspacing="20px" cellpadding="20px">
        <h1>ALL CUSTOMERS</h1>
        <table class="customer" style="font-color:white">
            <tr>
            <th> Name </th>
            <th> Email </th>
            <th> Account No </th>
            <th> Balance </th>
            </tr>
        
      <?php
      $server="localhost";
      $username="root";
      $password="";
      $dbname="bankingsystem";

      $con=mysqli_connect($server,$username,$password,$dbname);
      if(!$con){
        die("connection failed due to".mysqli_connect_error());
      }

      $sql="select Name,Email,Account_no,Balance from customers";
      $result=$con->query($sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Account_no"]."</td><td>".$row["Balance"]."</td></tr>";
        }
        echo "</table>";
      }
      else{
        echo "no result found!";
      }
      $con->close();
      ?>  
    </div>
    <div class="pagebreak">
    </div>
    <div style="width: 80%;color: white;padding: 20px;">
        <h5>When a customer deposits money into the bank,this money is on loan to the bank and the bank's most important obligation is to follow the customers instructions in relation to this money.The customer can withdraw money from the account at any point,and they can also stop payment of a cheque by informing the bank.If an oberdraft is in place ,the bank must also resonable written notice of any decision to reduce overdraft credit. </h5>

    </div>
    <div class="pagebreak"></div>
    <div class="footer">
        <center>
            <h3>Made with  love By Omii!</h3>
        </center>
    </div>
</center>
</body>
</html>