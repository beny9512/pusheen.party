<html>
  <head>
    <title>Pusheen Party</title>
    <meta charset="UTF-8">
    <style type="text/css">
        body {
            background: #FCF0E3;
        }
        .container {
            margin: 0 auto;
            width: 400px;
            margin-top: 100px;
        }
    </style>
  </head>
  <body>
      <div class="container">
        <?php
            $dir = "images/";
            $images = scandir($dir);
            $i = rand(2, sizeof($images)-1);
        ?>
    <a href="/"><img src="images/<?php echo $images[$i]; ?>" alt="" /></a>
      </div>
  </body>
</html>