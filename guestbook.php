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
        <div class="container-fluid col-md-12" id="guestlist">
          <h3>View Guestbook</h3>
          <table border="1" id="guesttable">
            <tr>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Contact Choice</th>
              <th>Phone or Email</th>
              <th>City Choice</th>
              <th>Contact Date</th>
              <th>Comments</th>
            </tr>
            <?php
              $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
              $filename = $DOCUMENT_ROOT.'steve_tut/'.'data/'.'guestbook.txt';
              $fp = fopen($filename, 'r');

              $display = "";
              $line_ctr = 0;

              while (true)
              {
                $line = fgets($fp);
                if (feof($fp))
                {
                  break;
                }
                $line_ctr++;
                $line_ctr_remainder = $line_ctr % 2;
                if ($line_ctr_remainder == 0)
                {
                  $style = "style='background-color:lightgray;'";
                }
                else
                {
                  $style = "style='background-color:#bfbfbf;'";
                }
                list($lastname, $firstname, $infotype, $contactinfo, $city, $contactday, $comments) = explode('|', $line);

                $display .= "<tr $style>";
                  $display .= "<td>".$lastname."</td>";
                  $display .= "<td>".$firstname."</td>";
                  $display .= "<td>".$infotype."</td>";
                  $display .= "<td>".$contactinfo."</td>";
                  $display .= "<td>".$city."</td>";
                  $display .= "<td>".$contactday."</td>";
                  $display .= "<td>".$comments."</td>";
                $display .= "</tr>";
              }
              fclose($fp);
              echo "$display";
            ?>
          </table>
        </div>
      </div>
    </div>

    <!--Script Files-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
