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
                var_dump($_POST);
                $form = array_map('trim', $_POST);
                $form = array_map('htmlentities', $form);
                var_dump($form);
                // nettoyage et validation des données soumises via le formulaire 
                if(!isset($form['name']) || $form['name'] === '') 
                    $errors[] = "Le prénom est obligatoire";
                if(!isset($form['last-name']) || $form['last-name'] === '') 
                    $errors[] = "Le nom est obligatoire";
                if(!isset($form['number']) || $form['number'] === '') 
                    $errors[] = "Le numéro de téléphone est obligatoire";
                if(!isset($form['email']) || $form['email'] === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
                    $errors[] = "Une adresse mail valide est obligatoire";
                if(!isset($form['dropdown']) || $form['dropdown'] === '') 
                    $errors[] = "Le sujet de votre message est obligatoire";
                if(!isset($form['message']) || $form['message'] === '') 
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