<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #0B0610;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>We Welcome you to </h3> 
                  <h1>INDIAN CORPORATION BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bankphotoo.png" width=400px  class="img-fluid pt-2">
              </div>
            </div>

            <div class="us">
              <br>
              
                <div class=" headi">
                 Our Goals and Vision
                </div><br>
                <div class="text">
              <p>Indian Corporation Bank is one of India’s leading private banks and was among the first to receive approval from the Reserve Bank of India (RBI) to set up a private sector bank in 2012. Today, Indian Corporation Bank has a banking network of 511 branches and 8,926 ATM's in 955 cities/towns. Indian Corporation Bank caters to a wide range of banking services covering commercial and investment banking on the wholesale side and transactional / branch banking on the retail side. Indian Corporation Bank’s mission is to be a world class Indian bank. We have a two-fold objective: first, to be the preferred provider of banking services for target retail and wholesale customer segments. The second objective is to achieve healthy growth in profitability, consistent with the bank’s risk appetite. The bank is committed to maintaining the highest level of ethical standards, professional integrity, corporate governance and regulatory compliance. Indian Corporation Bank’s business philosophy is based on five core values: Operational Excellence, Customer Focus, Product Leadership, People and Sustainability.
              </p>
              </div>
              <br>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/adduser2.png" height="500px" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #3A5E7A;">Create a Customer</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction.png" class="img-fluid">
                    <br><br>
                    <a href="transfermoney.php"><button style="background-color : #3A5E7A;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/thistory.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #3A5E7A;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Nisarg Sonar</b> 
        <a href="https://www.linkedin.com/in/nisarg-sonar-771287217/"target="_blank" style="color: #3A5E7A;" >Linkedin Profile</a><br>INDIAN CORPORATION BANK</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>