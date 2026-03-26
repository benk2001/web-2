<?php
// Bloc PHP pour la logique d'inscription (insertion en base de données plus tard)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP - URKIM</title>
    
    <style>
        /* Style général (identique au login pour la cohérence) */
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

        /* Boîte de formulaire transparente avec flou arrière-plan */
        .signup-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px 40px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 450px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #ffd700; /* Rappel de la couleur dorée */
        }

        /* Conteneur pour chaque champ de saisie */
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 0.8rem;
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
            box-sizing: border-box;
        }

        /* Couleur de la bordure quand on clique dans le champ */
        .input-group input:focus {
            border-color: #ffd700;
        }

        /* Bouton de validation d'inscription */
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
            margin-top: 15px;
            color: #000;
        }

        .btn-submit:hover {
            background: white;
            transform: scale(1.02);
        }

        /* Lien pour les utilisateurs déjà inscrits */
        .login-link {
            margin-top: 20px;
            display: block;
            font-size: 0.85rem;
            color: white;
            text-decoration: none;
        }

        .login-link span {
            color: #ffd700;
            font-weight: bold;
        }

        .login-link:hover span {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="signup-card">
        <h2>Créer un compte</h2>
        
        <form action="signup.php" method="POST">
            <div class="input-group">
                <label for="username">NOM D'UTILISATEUR</label>
                <input type="text" id="username" name="username" required placeholder="Ex: Ben_243">
            </div>

            <div class="input-group">
                <label for="email">ADRESSE EMAIL</label>
                <input type="email" id="email" name="email" required placeholder="votre@email.com">
            </div>

            <div class="input-group">
                <label for="password">MOT DE PASSE</label>
                <input type="password" id="password" name="password" required placeholder="••••••••">
            </div>

            <div class="input-group">
                <label for="confirm_password">CONFIRMER LE MOT DE PASSE</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="••••••••">
            </div>

            <button type="submit" class="btn-submit">S'inscrire maintenant</button>
        </form>

        <a href="login.php" class="login-link">Déjà un compte ? <span>Connectez-vous</span></a>
    </div>

</body>
</html>
