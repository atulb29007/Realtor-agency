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
          <h3>Thank You! A representative will contact you soon.</h3>
          <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $fullname = $firstname ." " . $lastname;
            echo "<h4>Information submitted for: $fullname</h4>";
            $infotype = $_POST['infotype'];
            $contactinfo = $_POST['contactinfo'];
            echo "<h4>your $infotype is $contactinfo</h4>";
            $city = $_POST['city'];
            echo "<h4>and you are interested in living in $city</h4>";
            $comments = $_POST['comments'];
            echo "<h4>Our representative will review your comment below :<br/>$comments</h4>";
            $contactday = date('Y-m-d');

            $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
            $filename = $DOCUMENT_ROOT.'steve_tut/'.'data/'.'guestbook.txt';
            $fp = fopen($filename, 'a');

            $output_line = $lastname.'|'.$firstname.'|'.$infotype.'|'.$contactinfo.'|'.$city.'|'.$contactday.'|'.$comments.'|'."\n";

            fwrite($fp, $output_line);
            fclose($fp);
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
