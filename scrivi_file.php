<?php
$datiValidi = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
    $email = filter_var($_POST['mail'] ?? '', FILTER_VALIDATE_EMAIL);
    $messaggio = htmlspecialchars(trim($_POST['messaggio'] ?? ''));

    $datiValidi = $nome && $email && $messaggio;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $datiValidi ? 'Grazie!' : 'Errore'; ?> - FC Caldana Academy 2025</title>
    <link rel="stylesheet" href="styles.css">
    <style>
           body {
            background: #0151cc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .content-container {
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .btn-home {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-home:hover {
            background: #3474e6;
        }

        .section-title {
            color: white;
            margin-bottom: 1rem;
        }

        p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
        }

        .alert.alert-danger {
            color: #ffebee;
            background-color: #c62828;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
        }

        footer {
            background: #222;
            margin-top: auto;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
<div class="wrapper">

    <!-- NAVBAR -->
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

    <!-- CONTENUTO -->
    <div class="main-content">
        <div class="container">
            <?php if ($datiValidi): ?>
                <h2 class="section-title">Grazie per averci contattato!</h2>
                <p>Il tuo messaggio è stato inviato con successo. Ti risponderemo al più presto.</p>
                <div class="form-actions">
                    <a href="index.php" class="btn-home">Torna alla Home</a>
                </div>
            <?php else: ?>
                <h2 class="section-title">Errore</h2>
                <div class="alert alert-danger">
                    <p>Compila tutti i campi obbligatori prima di inviare.</p>
                </div>
                <div class="form-actions">
                    <a href="contatti.php" class="btn-home">Torna al modulo</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div> <!-- Chiusura wrapper -->

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