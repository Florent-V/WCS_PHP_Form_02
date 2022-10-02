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
        <h1>Résumé de votre demande :</h1>
        <p>
            Merci <?php echo $_POST['name'] . ' ' . $_POST['last-name']?> de nous contacter à propos de : <?php echo $_POST['dropdown'] ?>
        </p>
        <p>
            Un de nos conseiller vous contactera soit à l'adresse <?php echo $_POST['email'] ?> ou par téléphone au 
            <?php echo $_POST['number'] ?> dans les plus brefs délais pour traiter votre demande :

        </p>

        <p>
            Message : <br>
            <?php echo $_POST['message'] ?>
        </p>

        
    </main>

</body>
</html>