<html>
  <head>
    <title> Introduction </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
    <header>
      <h2>KING REAL ESTATE</h2>
      <h4>Where the Customer is King</h4>
    </header>

    <div class="container">
      <div class="row forfixhead" id="mainrow">
        <div class="container-fluid col-md-6" id="guestlist">
          <h3>Mortgage Calculation.</h3>
          <?php
            $amount = $_POST['amount'];
            $rate = $_POST['rate'];

            if (!(is_numeric($amount)))
            {
              echo "<h4>The amount financed must be numeric.<br/><br/> You entered \"$amount\"</h4>";
              echo "</div></div></div></body></html>";
              exit;
            }
            if (!(is_numeric($rate)))
            {
              echo "<h4>The interest rate must be numeric.<br/><br/> You entered \"$rate\"</h4>";
              echo "</div></div></div></body></html>";
              exit;
            }

            echo "<h4>If you finance $$amount at an interest rate of $rate% ...</h4>";

            $payment_row = ($amount * ($rate / 100)) / 12;
            $payment = number_format($payment_row, 2);
            echo "<h4>Your monthly payment would be $$payment</h4>";
          ?>
        </div>
        <div class="container-fluid col-md-6" id="mortcal">
        </div>
      </div>
    </div>

    <!--Script Files-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
