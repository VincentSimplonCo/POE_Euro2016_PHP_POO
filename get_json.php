    <?php
      //Récupère le json et le teransforme en objet PHP
      $json_url = "competition.json";
      $json = file_get_contents($json_url);
      $competition = json_decode($json, true);
    ?>
