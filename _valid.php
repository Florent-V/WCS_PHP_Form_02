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