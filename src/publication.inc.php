<?php
    //Se connecter à la base de données 
    $pdo = new PDO('mysql:host=localhost;dbname=bankadmin;charset=utf8','root','Edo2000!');

    //On récupère les clients
    $reponse = $pdo->query('SELECT * FROM `user` LIMIT 10'); 

    //On affiche les données dans le tableau
    while($donnee = $reponse->fetch()){
        echo '<tr>
                <td>'.$donnee['nom'].'</td>
                <td>'.$donnee['prenom'].'</td>
                <td>'.$donnee['email'].'</td>
            </tr>';
    }
    
    //On termine le traitement de la requête
    $reponse->closeCursor();
?>