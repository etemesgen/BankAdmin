<?php
    //Se connecter avec la BDD
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=bankadmin;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e -> getMessage());
    }

    //Tester les entrées du formulaires / Vérifier les champs
    if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['email'])){
        if(!$_POST['nom'] || !$_POST['prenom'] || !$_POST['email']){
            print "<p class='warning'>Vous devez remplir les champs !</p>";
        }
        else if(is_numeric($_POST['nom']) || is_numeric($_POST['prenom'])){
            print "<p class='warning'>Vous devez saisir des caractères !</p>";
        }
        else{
            $req = $pdo->prepare('INSERT INTO user(nom,prenom,email) VALUES (?,?,?)');
            $req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email']));
            print "<p class='success'>Le client a été ajouté.</p>";
        }
    }
?>