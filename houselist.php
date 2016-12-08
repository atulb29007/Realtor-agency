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
        <?php
          $find_city = $_POST['dream_city'];
          if (empty($find_city))
          {
            $find_city = 'ALL';
          }

          $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
          $dirname = $DOCUMENT_ROOT.'steve_tut/'.'img/'.'homes';
          $dirhandle = opendir($dirname);

          if ($dirhandle)
          {
            while (false !== ($file = readdir($dirhandle)))
            {
              if ($file != '.'  && $file != '..')
              {
                displayPropertyInfo($file, $find_city);
              }
            }
          }

          /*======== FUNCTION DEFINITION ========*/
          function displayPropertyInfo($image_filename, $find_city)
          {
            $image_name = 'img/homes/'.$image_filename;
            $house_image = "<img src='".$image_name."'/>";

            $index_filename = str_replace('.JPG', '.txt', $image_filename);
            $filename = 'data/houses_data/'.$index_filename;
            $fp = fopen($filename, 'r');

            $show_house = 'Y';
            while (true)
            {
              $line = fgets($fp);
              if (feof($fp))
              {
                break;
              }

              $pos = stripos($line, 'City: ');
              if ($pos !== false)
              {
                $city = substr($line, 5);
                $city = trim($city);
                if ($find_city != 'ALL')
                {
                  $subpos = stripos($city, $find_city);
                  if ($subpos === false)
                  {
                    $show_house = 'N';
                    break;
                  }
                }
              }

              $pos = stripos($line, 'Price:');
              if ($pos !== false)
              {
                $price = substr($line, 6);
                $price = trim($price);
              }

              $pos = stripos($line, 'Bedrooms:');
              if ($pos !== false)
              {
                $bedrooms = substr($line, 9);
                $bedrooms = trim($bedrooms);
              }

              $pos = stripos($line, 'Baths:');
              if ($pos !== false)
              {
                $baths = substr($line, 6);
                $baths = trim($baths);
              }

              $pos = stripos($line, 'Footage:');
              if ($pos !== false)
              {
                $footage = substr($line, 8);
                $footage = trim($footage);
              }

              $pos = stripos($line, 'Realtor:');
              if ($pos !== false)
              {
                $realtor = substr($line, 8);
                $realtor = trim($realtor);
              }

              $pos = stripos($line, 'Grabber:');
              if ($pos !== false)
              {
                $grabber = substr($line, 8);
                $grabber = trim($grabber);
              }

              $pos = stripos($line, 'Description:');
              if ($pos !== false)
              {
                $description = substr($line, 12);
                $description = trim($description);
              }
            }
            if ($show_house == 'Y')
            {
              echo
              "<div class='housecol col-md-4'>"
                  .$house_image.
                  "<h4>".$grabber."</h4>
                  <p>City: ".$city."</p>
                  <p>Price: ".$price."</p>
                  <p>Bedrooms: ".$bedrooms."</p>
                  <p>Bathrooms: ".$baths."</p>
                  <p>Footage: ".$footage."</p>
                  <p>Realtor: ".$realtor."</p>
                  <p>Description:<br/>".$description."</p>
                </div>";
            }
          }
        ?>
      </div>
    </div>

    <!--Script Files-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
