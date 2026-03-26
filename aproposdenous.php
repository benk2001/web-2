<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À PROPOS - URKIM</title>
    <style>
        /* 1. Configuration globale */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), 
                        url('images/frontimage.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column; /* Permet d'empiler navbar et contenu */
            align-items: center;
            min-height: 100vh;
            color: white;
        }

        /* 2. Style de la barre de navigation (Identique aux autres pages) */
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

        /* 3. Conteneur de texte "À Propos" */
        .about-container {
            max-width: 800px;
            margin: auto; /* Centre le bloc verticalement dans l'espace restant */
            padding: 50px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px); /* Support Safari */
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            line-height: 1.8;
            box-shadow: 0 15px 35px rgba(0,0,0,0.5);
        }

        h1 { 
            color: #ffd700; 
            text-transform: uppercase; 
            letter-spacing: 2px;
            margin-bottom: 25px;
            font-size: 2.2rem;
        }

        p { 
            font-size: 1.15rem; 
            color: #eee; 
            margin-bottom: 20px;
        }

        /* Style du lien de retour */
        .back-link {
            margin-top: 20px;
            display: inline-block;
            color: #ffd700;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .back-link:hover { 
            color: white; 
            transform: translateX(-5px);
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

    <div class="about-container">
        <h1>À Propos de l'URKIM</h1>
        
        <p>L'URKIM est une institution dédiée à l'excellence académique et à l'innovation technologique. Notre mission est de former les leaders de demain en mettant à leur disposition des outils modernes et un environnement propice à l'apprentissage.</p>
        
        <p>Ce portail web permet une gestion fluide des résultats et une communication directe entre les étudiants et l'administration de l'université.</p>
        
        <p>Grâce à une infrastructure solide et une vision tournée vers l'avenir, nous accompagnons chaque étudiant vers la réussite de son parcours professionnel.</p>

        <a href="index.php" class="back-link">← Retour à l'accueil</a>
    </div>

</body>
</html>