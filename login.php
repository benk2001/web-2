<?php
// Bloc PHP pour gérer la logique de connexion plus tard
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - URKIM</title>
    
    <style>
        /* Style général identique à l'accueil pour la cohérence */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('frontimage.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: white;
        }

        /* Boîte de formulaire avec effet de flou (Glassmorphism) */
        .login-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 400px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Groupe de saisie (Label + Input) */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.85rem;
            color: #ccc;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(0, 0, 0, 0.3);
            color: white;
            outline: none;
            box-sizing: border-box; /* Évite que l'input dépasse */
        }

        .input-group input:focus {
            border-color: #ffd700;
        }

        /* Bouton de connexion */
        .btn-submit {
            width: 100%;
            padding: 12px;
            background: #ffd700;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: white;
            transform: scale(1.02);
        }

        /* Lien pour retourner à l'accueil */
        .back-link {
            margin-top: 20px;
            display: block;
            font-size: 0.8rem;
            color: #ffd700;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Connexion</h2>
        
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="email">ADRESSE EMAIL</label>
                <input type="email" id="email" name="email" required placeholder="votre@email.com">
            </div>

            <div class="input-group">
                <label for="password">MOT DE PASSE</label>
                <input type="password" id="password" name="password" required placeholder="••••••••">
            </div>

            <button type="submit" class="btn-submit">Se connecter</button>
        </form>

        <a href="index.php" class="back-link">← Retour à l'accueil</a>
    </div>

</body>
</html>
