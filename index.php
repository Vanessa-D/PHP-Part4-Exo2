<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 2</title>
</head>
<body>
    <p>
        Créer un tableau associatif contenant comme clés des chiffres de 1 à 5 et comme valeurs cinq langages de programmation :</br>
           <ul>
                <li>Affichez ces langages</li>
                <li>Afficher le troisième langage</li>
                <li>Ajouter une clé, lui assigner une valeur puis l'afficher</li>
           </ul>
    </p>

    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            /* Tableau associatif : sytème 'clé' => valeur */
            $languages = ['1' => 'Javascript', '2' => 'PHP', '3' => 'Python', '4' => 'Java', '5' => 'C'];

            /* Une paire clé => valeur du tableau est récupérée et affichée à chaque passage de boucle */
            foreach($languages as $key => $value){
                echo 'Langage ' .$key. ' : ' .$value. '<br>';
            }
            var_dump($languages);
        ?>
    </div>

    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php 
             /* On attrape une valeur du tableau par sa clé*/
             echo 'Le troisième langage est : ' .$languages['3'];
        ?>
    </div>

    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
              /* Ajout d'un élément au tableau puis affichage de l'élément */
              $languages['6'] = 'C++';
              echo 'Ajout dans le tableau du langage : ' .$languages['6']. '<br>';
              var_dump($languages);
        ?>
    </div>
</body>
</html>