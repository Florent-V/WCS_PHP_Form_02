<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WCS Form 01</title>
</head>
<body>
    <header>
        <h1 id="title">Confirmation</h1>
        <p id="description">Votre message a bien été envoyé !</p>
    </header>
    <main>
        <?php

            $errors = [];

            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                // nettoyage et validation des données soumises via le formulaire 
                if(!isset($_POST['name']) || trim($_POST['name']) === '') 
                    $errors[] = "Le prénom est obligatoire";
                if(!isset($_POST['last-name']) || trim($_POST['last-name']) === '') 
                    $errors[] = "Le nom est obligatoire";
                if(!isset($_POST['number']) || trim($_POST['number']) === '') 
                    $errors[] = "Le numéro de téléphone est obligatoire";
                if(!isset($_POST['email']) || trim($_POST['email']) === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
                    $errors[] = "Une adresse mail valide est obligatoire";
                if(!isset($_POST['dropdown']) || trim($_POST['dropdown']) === '') 
                    $errors[] = "Le sujet de votre message est obligatoire";
                if(!isset($_POST['message']) || trim($_POST['message']) === '') 
                    $errors[] = "Votre message ne doit pas être vide";

                if(empty($errors)) {
                    // traitement du formulaire
                    // puis redirection
                    include '_valid.php';
                } else {
                    include '_invalid.php';
                }
            }
        ?>



        














        
    </main>

</body>
</html>