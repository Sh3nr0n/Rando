<!-- Contraintes :

    Vous vérifierez que les informations envoyées par les formulaires sont valides avant l’ajout en base de données.
    => checks auto en js sur les champs + checks de sécurité en php avec une bibliothèque php

    https://www.dreamhost.com/blog/php-security-user-validation-sanitization/

    Il ne doit y avoir qu’un seul script pour se connecter à la base de données.
    => Stocker les infos de connexions dans un fichier php à appeler avec un include

    Utiliser au moins une fois include()
    => include appelle les infos de connexion (et une )bibliothèque faisant les verifs de secuité standard sur les données ?)

    Toutes les informations affichées sont comprises sans difficulté d’interprétation par un humain.
    => bonnes pratiques, nommage des variables = "self-explaining" en camel case, noms courts et cohérents d'un langage à l'autre (php, JS, html)

    Etre notifié par un message que chaque opération en lien avec la base de données et que je viens d’effectuer s’est exécutée avec succès.
    => utiliser les "alerts" de bootstrap avec les fonctions fadeIn, show, hide de jquery et utiliser $(this) parce que c'est cool ;)

    Vous êtes libre de la manière d’afficher le message de notification. 
    => affichage en haut à droite avec une persistence de 5 secondes
-->

<?php

include 'php/connect.php';

$getTable=$connect->query("SELECT * FROM hiking;");

//REtourner 'oui' pour 1 dans 'available' ou 'non' pour 0


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Model</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>

    </header>

    <main>
        <div class="container-fluid">
            <div class="col-sm-6 offset-3 text-center">
                <h1>Randonnez!</h1>
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Randonnée</th>
                      <th scope="col">Difficulté</th>
                      <th scope="col">Distance</th>
                      <th scope="col">Durée</th>
                      <th scope="col">Dénivelé</th>
                      <th scope="col">Praticable</th>
                    </tr>
                  </thead>
                     <tbody>
                        <?php while ($row = $getTable->fetch_assoc()) {
                            echo  "<tr>
                            <td>
                            <form id='submitId".$row['id']."' class='submitRando' action='php/modify_hiking.php' method='post'> 
                            <input type='hidden' name='idRando' value=".$row['id'].">
                             </form> 
                             <a id='Id".$row['id']."' class='submitButton' href='#'>". $row['name'] ."</a>
                             </td>
                             <td>".$row['difficulty']."</td>
                             <td>".$row['distance']."</td>
                             <td>".$row['duration']."</td>
                             <td>".$row['height_difference'] ."</td>
                             <td>". $row['available']."</td>
                            </tr>";
                            } 
                        ?>
                    
                    </tbody>
                      
                </table>

                <a id="addHiking" class="btn btn-primary">+</a>
                <!-- target="_blank" href="php/add_hiking.php" --> 
            </div>
        </div>

    </main>

    <footer>


    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>