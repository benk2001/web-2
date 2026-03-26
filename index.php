<?php
// Bloc PHP pour les scripts serveurs
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URKIM</title>
    
    <style>
        /* 1. Configuration globale */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('frontimage.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
            color: white;
            overflow: hidden;
        }

        /* 2. Keyframes pour l'animation d'apparition */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* 3. Navigation */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: flex-end; 
            padding: 20px 0;
            animation: fadeInUp 0.8s ease-out; /* Animation de la barre de menu */
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding-right: 50px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            margin: 0 20px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.3s;
        }
        
        .navbar a:hover { color: #ffd700; }

        /* 4. Bloc Central avec Animations Séquentielles */
        .hero-section {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-center {
            background-color: white;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 15px;
            /* Animation du logo */
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .logo-center img {
            height: 70px;
            width: auto;
        }

        h1 {
            font-size: 3rem;
            letter-spacing: 2px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            margin: 0;
            /* Animation du titre (délai de 0.2s) */
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.2s forwards;
        }

        .containeur {
            margin-top: 30px;
            /* Animation des boutons (délai de 0.4s) */
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.4s forwards;
        }

        .containeur ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
        }

        .containeur a {
            text-decoration: none;
            padding: 12px 30px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .btn-login { color: white; border: 2px solid rgba(255, 255, 255, 0.6); }
        .btn-login:hover { background: rgba(255, 255, 255, 0.1); border-color: white; }

        .btn-signup { background: #ffd700; color: #000; box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3); }
        .btn-signup:hover { background: white; transform: scale(1.05); }

        /* 5. Footer */
        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 0.85rem;
            opacity: 0.7;
            animation: fadeInUp 1s ease-out 0.6s forwards;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="aproposdenous.php">A PROPOS DE NOUS</a></li>
            <li><a href="tableaux.php">TABLEAUX</a></li>
        </ul>
    </nav>

    <div class="hero-section">
        <div class="logo-center">
            <img src="images/logo.png" alt="Logo">
        </div>

        <h1>BIENVENU CHEZ URKIM NA BISO</h1>

        <div class="containeur">
            <ul>
                <li><a href="login.php" class="btn-login">LOG IN</a></li>
                <li><a href="signup.php" class="btn-signup">SIGN UP</a></li>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> URKIM NA BISO. Tous droits réservés.</p>
    </footer>

</body>
</html>
