<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="styles.css">
    <title>Strutture - FC Caldana Academy 2025</title>
    <style>
        /* Stili specifici per Strutture */
        .facilities-header {
            text-align: center;
            padding: 60px 20px;
            background: #0151cc;
            color: white;
        }

        .facilities-header h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .facility-card {
            max-width: 1200px;
            margin: 40px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .facility-image {
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
        }

        .facility-content {
            padding: 30px;
        }

        .facility-title {
            color: #0151cc;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .facility-info {
            margin: 15px 0;
            display: flex;
            align-items: center;
        }

        .facility-info i {
            color: #0151cc;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .facility-description {
            line-height: 1.6;
            color: #666;
            margin-top: 20px;
        }

        .btn-map {
            color: #0151cc;
            text-decoration: none;
            margin-left: 15px;
            border-bottom: 2px solid #0151cc;
        }

        @media (max-width: 768px) {
            .facility-image {
                height: 250px;
            }
            
            .facility-content {
                padding: 20px;
            }
            
            .facility-title {
                font-size: 1.5rem;
            }
        }
    </style>
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

    <!-- Header -->
    <div class="facilities-header">
        <h1>Le Nostre Strutture</h1>
        <p>Scopri i nostri centri sportivi all'avanguardia</p>
    </div>

    <!-- Contenuto Strutture -->
    <main>
        <div class="facility-card">
            <div class="facility-image" style="background-image: url('https://via.placeholder.com/1200x400')"></div>
            <div class="facility-content">
                <h2 class="facility-title">Centro Principale</h2>
                
                <div class="facility-info">
                    <i class="fas fa-map-marker-alt"></i>
                    Via dello Sport, 123 - Caldana (GR)
                    <a href="#" class="btn-map">Vedi mappa</a>
                </div>

                <div class="facility-info">
                    <i class="fas fa-clock"></i>
                    Orario: Lun-Dom 8:00 - 22:00
                </div>

                <div class="facility-description">
                    <p>Il nostro fiore all'occhiello con:</p>
                    <ul>
                        <li>3 campi in erba naturale</li>
                        <li>2 campi sintetici</li>
                        <li>Palestra attrezzata</li>
                        <li>Spogliatoi moderni</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="facility-card">
            <div class="facility-image" style="background-image: url('https://via.placeholder.com/1200x400')"></div>
            <div class="facility-content">
                <h2 class="facility-title">Palestra Tecnica</h2>
                
                <div class="facility-info">
                    <i class="fas fa-map-marker-alt"></i>
                    Via dell'Allenamento, 45 - Caldana (GR)
                </div>

                <div class="facility-info">
                    <i class="fas fa-clock"></i>
                    Orario: Lun-Ven 15:00 - 20:00
                </div>

                <div class="facility-description">
                    <p>Struttura dedicata all'allenamento tecnico:</p>
                    <ul>
                        <li>Campo sintetico coperto</li>
                        <li>Sala pesi</li>
                        <li>Area riabilitazione</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

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