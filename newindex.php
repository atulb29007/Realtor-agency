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
          <h3>Featured Home !</h3>
          <img src="img/homes/house2.JPG"/>
          <h4 style="font-size:1.3em;">As far as eye can see ....</h4>
          <p style="font-size:1.2em;">
            Spectacular Ocean and Canyon views!!,<br/>
            This large estate has room to entertain with 1200 sq. ft. "ballroom" that features modern stone and woodwork, valued ceilings and huge bay windows.Large master Suites featuring "His" and "Her" bathrooms.
           </p>
        </div>

        <div class="container-fluid col-md-6" id="mortcal">
          <h3>Find your Dream Home</h3>
          <form method="post" action="houselist.php">
            <div>
              <h4>Enter city:
                <input type="text" name="dream_city" size="15">
              </h4>
              <p>(Leave blank to find all Houses listed)</p>
            </div>
            <div>
              <input id="submitbutton" type="submit" value="Find Homes">
              <p style="font-size:1.2em;">We represent homes in following cities: <br/>1. OceanCove<br/>2. Tomsville<br/>3. Pine Beach</p>
              <a href="index.php" style="font-size:1.3em;text-decoration:underline;">Guest Book</a><br/>
              <a href="index.php" style="font-size:1.3em;text-decoration:underline;">Mortgage Calculator</a>
            </div>
          </form>
        </div>

      </div>
    </div>

    <div class="container-fluid forfixhead" id="realtorsection">
      <h2>Realtors</h2>
      <div class="row" id="realtorrow">
        <?php
          $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
          $dir_name = $DOCUMENT_ROOT.'steve_tut/'.'img/'.'realtors';
          $dirhandle = opendir($dir_name);

          if ($dirhandle)
          {
            $realtor_pics = array();
            while(false !== ($file = readdir($dirhandle)))
            {
              if ($file != '.' && $file != '..')
              {
                array_push($realtor_pics, $file);
              }
            }
          }

          sort($realtor_pics);

          foreach ($realtor_pics as $element)
          {
            $realtor_pic_address = 'img/realtors/'.$element;
            $realtor_name = str_replace('.jpg', '', $element);
            $realtor_name = ucfirst($realtor_name);
            echo
            "
              <div class='col-md-4 realtorcol'>
                <img src='".$realtor_pic_address."'/>
                <p>$realtor_name</p>
              </div>
            ";
          }
        ?>

      </div>
    </div>

    <!--Script Files-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
