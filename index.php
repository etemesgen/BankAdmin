<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="shortcut icon" type="image/png" href="./asset/Logo_ico.ico" />
    <title>BankAdmin</title>
</head>
<body>
    <img src="./asset/Logo.png">
    <h1>Bienvenue sur BankAdmin</h1>
    <h2>Gérer vos clients en toute tranquillité !</h2>
    <br>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Temesgen</td>
            <td>Edomiyas</td>
            <td>temesgen.edomiyas@yahoo.com</td>
        </tr>
        <?php
            include_once("./src/publication.inc.php");
        ?>    
    </table>
    <br>
    <br>
    <a href="./ajouter.php">+ Ajouter un client</a>            
</body>
</html>