<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="index.css" rel="stylesheet" type="text/css"></link>
  </head>
  <body>

    <!-- <h1 id="title">Euro 2016</h1> -->


    <?php

      require "get_json.php";

      $entete = "<h1 id='title'>".($competition->name)."</h1>";
      echo $entete;

      // function viewGroups(){
      $affichageGroupes;

        for ($compteurGroupe = 0; $compteurGroupe < count($competition->groups); $compteurGroupe++) {
          $groupes = $competition->groups[$compteurGroupe]->id;
          $affichageGroupes .= "<div class='conteneur'>"."<h2 class='groupes'>"."Groupe: ".$groupes."</h2>";

          for ($compteurEquipe = 0; $compteurEquipe < count($competition->groups[$compteurGroupe]->teams) ; $compteurEquipe++) {
            $equipes = $competition->groups[$compteurGroupe]->teams[$compteurEquipe];
            $affichageGroupes .= "<li class='equipes'>".$equipes."</li>";
          }
          $affichageGroupes .= "</div>";
        }

        echo $affichageGroupes;
      // }

      // viewGroups();
    ?>

    <div>

  </body>
</html>
