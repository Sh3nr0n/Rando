<?php

include 'connect.php';


$nomRando = $connect->query("SELECT name FROM hiking WHERE name ='Le tour du Morne Langevin';");



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajouter un nouveau parcours</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>

    </header>

    <main>
    <h1>OK</h1>
    <div class="container-fluid">
    <form method="post" action="#">
    <div class="row">
    <div class="col-6">



    
    <div class="form-group">
    <label for="nomRandonnee">Nom de la randonnée : </label>
    <input type='text' class='form-control' name='nomRando' value="<?php $rando = $nomRando->fetch_assoc(); echo $rando["name"];?>">
    <label for="denivele">Dénivelé : </label>
    <input type='text' class='form-control' name='denivele' value="<?php $rando = $nomRando->fetch_assoc(); echo $rando["name"];?>">
    <label for="praticable">Praticabilité : </label>
    <input type='text' class='form-control' name='praticable' value="<?php $rando = $nomRando->fetch_assoc(); echo $rando["name"];?>">
    </div>
</div>
    <div class="col-6">
    <label for="nomRandonnee">Nom de la randonnée : </label>
    <input type='text' class='form-control' name='nomRando' value="<?php $rando = $nomRando->fetch_assoc(); echo $rando["name"];?>">
    <label for="denivele">Dénivelé : </label>
    <input type='text' class='form-control' name='denivele' value="<?php $rando = $nomRando->fetch_assoc(); echo $rando["name"];?>">
    <label for="praticable">Praticabilité : </label>
    <input type='text' class='form-control' name='praticable' value="<?php $rando = $nomRando->fetch_assoc(); echo $rando["name"];?>">

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    
    </div>
    </form>
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