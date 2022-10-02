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
    <h1 id="title">Formulaire de contact</h1>
    <p id="description">Merci de prendre le temps de nous envoyer un message</p>
  </header>
  

  <form action="thanks.php" method="post" id="survey-form">
    <fieldset class="personnal-info">
        <div class="field">
            <label for="name">Prénom</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Entrer votre prénom" required/>
        </div>

        <div class="field">
            <label for="last-name">Nom</label>
            <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Entrer votre nom" required/>
        </div>

        <div class="field">
            <label for="number">Téléphone</label>
            <input type="tel" name="number" id="number" class="form-control" placeholder="06 ..."/>
        </div>
      
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Entrer votre adresse mail" required />
        </div>

        <div class="field">
            <label for="dropdown">What the subject of your message ?</label>
            <select name="dropdown" id="dropdown" class="dropmenu" required>
                <option value="" disabled selected>Select the subject</option>
                <option value="Deamande d'information">Demande d'informations</option>
                <option value="Signaler un problème">Signaler un problème</option>
                <option value="Remerciement">Remerciement</option>
                <option value="Réclamation">Réclamation</option>
                <option value="Autre">Autre</option>
            </select>
        </div>

        <div class="field">
            <label for="message" class="label-block">Any comments or suggestion ?</label>
            <textarea name="message" id="message" rows="5" placeholder="Enter your comment here..."></textarea>
        </div>

        <button type="submit" value="submit" id="submit">
            Envoyer
        </button>


    </fieldset>
  
    
  </form>


    
</body>
</html>