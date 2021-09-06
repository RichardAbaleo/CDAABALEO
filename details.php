<?php 
    require "connection_bdd.php";
    $id = $_GET["id"];
    $requete = "SELECT * FROM ville WHERE id=".$id;   
    $result = $bdd->query($requete);
    $row = $result->fetch(PDO::FETCH_OBJ);
?>
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
    <title>CDAABALEO - Modif</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form
              id="updateForm"
              class="form-group"
              action="update_script.php?id=<?php echo $id ?>"
              method="POST"
            >
            <fieldset>
            <br /><br />
            <br />
              <label for="nom">Nom :</label>
              <input
                class="form-control"
                type="text"
                name="nom"
                value="<?php echo $row->nom ?>"
              />
             <br />
              <label for="dep">Département :</label>
              <input
                class="form-control"
                type="text"
                id="dep"
                name="dep"
                value="<?php echo $row->dep ?>"
              />
              <br />
              <label for="cp">Code Postal :</label>
              <input
                class="form-control"
                type="text"
                name="cp"
                id="cp"
                value="<?php echo $row->cp ?>"
              />
              <br />
              <label for="pro_d_modif">Date de modification :</label>
              <input
                class="form-control"
                type="text"
                disabled="disabled"
                value="<?php echo $row->datemodif ?>"
              />
              <br />
            </fieldset>
            <br />
            <a type="button" class="btn btn-lg btn-secondary active" href="index.php">Retour</a>
            <button type="submit" id="enregistrer" class="btn btn-lg btn-success ml-5 active">Enregister</button>
          </form>
          <br />
          </div>
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