<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- BOOTSTRAPS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <title>CDAABALEO - Index</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 table-responsive">
        </br></br>
          <table class="table table-bordered">
            <tbody>
              <?php 
               require "connection_bdd.php";
               $reponsebis = $bdd->query('SELECT * FROM ville');
               while ($donnees = $reponsebis->fetch()) {
               $affichage = "<tr><td class='align-middle table-warning' style='border-color:black;'><a href='details.php?id=".$donnees['id']."'>".($donnees['nom'])."</a></td></tr>";  
               echo $affichage;
               }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- BOOTSTRAPS -->
      <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>