<?php include("includes/header.php"); ?>

<section id="contact">
    <div class="contact-container">
        <h2>Contactez-nous</h2>
        <form method="POST" action="contact.php">
            <label>Nom :</label>
            <input type="text" name="name" required>
            
            <label>Email :</label>
            <input type="email" name="email" required>
            
            <label>Message :</label>
            <textarea name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);

            echo "<p class='success'>Merci $name, votre message a bien été envoyé !</p>";
        }
        ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>