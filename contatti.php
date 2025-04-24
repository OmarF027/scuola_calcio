<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti - FC Caldana Academy 2025</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container">
        
        <a href="img/logo.jpg" target="_blank">
          <img src="img/logo.jpg" alt="Logo FC Caldana Academy 2025" />
        </a>
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="strutture.php">Strutture</a></li>
          <li><a href="contatti.php">Contatti</a></li>
        </ul>
      </div>
    </nav>

    <!-- Sezione contatti -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">Contattaci</h2>
            <form class="contact-form" action="scrivi_file.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="messaggio">Messaggio</label>
                    <textarea id="messaggio" name="messaggio" rows="5" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Cancella</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>© FC Caldana Academy 2025 – Tutti i diritti riservati</p>
            <div class="footer-links">
                <span>Caldana</span> |
                <a href="tel:+393471234567">+39 347 123 4567</a> |
                <a href="https://facebook.com" target="_blank">Facebook</a> |
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </div>
        </div>
    </footer>

</body>
</html>