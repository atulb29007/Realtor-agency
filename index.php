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
          <h3>Please sign up on our guest list and our representative will contact you soon.</h3>
          <form method="post" action="response.php">
            <div>
              <h4>First name:
                <input type="text" name="firstname" size="15">
              </h4>
            </div>
            <div>
              <h4>Last name:
                <input type="text" name="lastname" size="15">
              </h4>
            </div>
            <div>
              <h4>Contact Information:
              <input class="radiobutton" type="radio" name="infotype" value="Phone" checked="checked"> Phone</input>
              <input class="radiobutton" type="radio" name="infotype" value="Email"> E-mail</input>
              </h4>
              <input type="text" name="contactinfo" size="53">
            </div>
            <div>
              <h4>City where you want to reside:</h4>
              <select name="city" size="1">
                <option value="-">-</option>
                <?php
                  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
                  $filename = $DOCUMENT_ROOT.'steve_tut/'.'data/'.'cities.txt';
                  $lines_in_file = count(file($filename));
                  $fp = fopen($filename, 'r');

                  for($ii = 1; $ii <= $lines_in_file; $ii++)
                  {
                    $line = fgets($fp);
                    $city = trim($line);
                    echo "<option value=\"$city\">$city</option>";
                  }

                  fclose($fp);
                ?>
              </select>
            </div>
            <div>
              <h4>Comments:</h4>
              <textarea name="comments" rows="4" cols="50"></textarea>
            </div>
            <div>
              <input id="submitbutton" type="submit" value="Submit Information">
            </div>
          </form>
          <h4>For Admin Use only : <a href="guestbook.php">View Guestbook</a></h4>
        </div>

        <div class="container-fluid col-md-6" id="mortcal">
          <h3>Mortgage Calculator</h3>
          <form method="post" action="calculator.php">
            <div>
              <h4>Amount Financed:
                <input type="text" name="amount" size="10">
              </h4>
            </div>
            <div>
              <h4>interest Rate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="rate" size="10">
              </h4>
            </div>
            <div>
              <input id="submitbutton" type="submit" value="Calculate Payment">
            </div>
          </form>
        </div>

      </div>
    </div>

    <!--Script Files-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
