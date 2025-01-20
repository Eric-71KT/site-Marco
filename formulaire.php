<form id="contact" action="" method="post">
    <h3>Formulaire de contact</h3>
    <h4>Contactez-nous pour développer votre projet !</h4>
    <fieldset>
        <input placeholder="Votre Nom" type="text" name="nom" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
        <input placeholder="Votre prénom" type="text" name="prenom" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
        <input placeholder="Votre adresse Email" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
        <input placeholder="Votre numéro de téléphone" type="tel" name="telephone" tabindex="3" required>
    </fieldset>
    <fieldset>
        <input placeholder="Le sujet de votre demande" type="text" name="sujet" tabindex="4" required>
    </fieldset>
    <fieldset>
        <textarea placeholder="Tapez votre message ici...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
</form>
