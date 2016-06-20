<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="index.css" rel="stylesheet" type="text/css"></link>
  </head>
  <body>

    <h1 id="title">Euro 2016</h1>


    <?php

      require "get_json.php";

      echo "<pre>";
      print_r($competition);
      echo "</pre>";
    ?>

  </body>
</html>
