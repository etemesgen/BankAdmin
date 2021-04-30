<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>BankAdmin</title>
</head>
<body>
    <img src="./asset/admin.png">
    <h1>Ajouter un client</h1>
    <br>
    <br>
   <section id="formulaire"> 
    <form action="#" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" placeholder="" autofocus>
    <label for="prenom">Prenom:</label>
    <input type="text" name="prenom" id="prenom">
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email"><br>
    <input type="submit" name="submit" value="Enregistrer">
    </form>        
    <?php
       include_once("./src/ajouter_client.inc.php"); 
    ?>
  </section> 
</body>
</html>