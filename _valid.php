<h1>Résumé de votre demande :</h1>
<p>
    Merci <?php echo $form['name'] . ' ' . $form['last-name']?> de nous contacter à propos de : <?php echo $form['dropdown'] ?>
</p>
<p>
    Un de nos conseiller vous contactera soit à l'adresse <?php echo $form['email'] ?> ou par téléphone au 
    <?php echo $form['number'] ?> dans les plus brefs délais pour traiter votre demande :

</p>

<p>
    Message : <br>
    <?php echo $form['message'] ?>
</p>