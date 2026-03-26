<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT - URKIM</title>
    <style>
        /* 1. Configuration globale (Identique aux autres pages) */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('frontimage.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        /* 2. Barre de navigation */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: flex-end; 
            padding: 20px 0;
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
        
        .navbar a:hover { 
            color: #ffd700; 
        }

        /* 3. Boîte de contact (Style Glassmorphism) */
        .contact-card {
            margin: auto; /* Centre la carte verticalement */
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.1);
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.5);
        }

        h2 { 
            color: #ffd700; 
            text-transform: uppercase; 
            letter-spacing: 2px;
            margin-bottom: 25px;
        }

        .input-group { 
            margin-bottom: 20px; 
            text-align: left; 
        }

        .input-group label { 
            display: block; 
            margin-bottom: 8px; 
            font-size: 0.75rem; 
            color: #ffd700; 
            font-weight: 600;
            letter-spacing: 1px;
        }

        .input-group input, .input-group textarea {
            width: 100%; 
            padding: 14px; 
            border-radius: 10px; 
            border: 1px solid rgba(255,255,255,0.2);
            background: rgba(0,0,0,0.4); 
            color: white; 
            outline: none; 
            box-sizing: border-box;
            transition: 0.3s;
            font-family: inherit;
        }

        .input-group input:focus, .input-group textarea:focus {
            border-color: #ffd700;
            background: rgba(0,0,0,0.6);
        }

        textarea { 
            height: 120px; 
            resize: none; 
        }

        .btn-send {
            width: 100%; 
            padding: 14px; 
            background: #ffd700; 
            border: none; 
            border-radius: 10px;
            font-weight: 800; 
            cursor: pointer; 
            text-transform: uppercase; 
            transition: 0.4s;
            color: #000;
            margin-top: 10px;
        }

        .btn-send:hover { 
            background: white; 
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
        }

        .back-link {
            display: inline-block;
            margin-top: 25px;
            color: #aaa;
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
        }

        .back-link:hover { 
            color: #ffd700; 
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="aproposdenous.php">A PROPOS</a></li>
            <li><a href="tableaux.php">TABLEAUX</a></li>
        </ul>
    </nav>

    <div class="contact-card">
        <h2>Contactez-nous</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label>NOM COMPLET</label>
                <input type="text" name="nom" placeholder="Ex: Jean Dupont" required>
            </div>
            <div class="input-group">
                <label>EMAIL</label>
                <input type="email" name="email" placeholder="votre@email.com" required>
            </div>
            <div class="input-group">
                <label>MESSAGE</label>
                <textarea name="message" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
            </div>
            <button type="submit" class="btn-send">Envoyer le message</button>
        </form>
        
        <a href="index.php" class="back-link">← Retour à l'accueil</a>
    </div>

</body>
</html>
