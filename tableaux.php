<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLEAUX - URKIM</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            /* On reprend le même fond que l'accueil */
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('images/frontimage.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
        }

        /* Réutilisation de la Navbar de l'accueil */
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
        .navbar a:hover { color: #ffd700; }

        /* Conteneur principal */
        .table-container {
            margin-top: 50px;
            width: 90%;
            max-width: 1000px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            text-align: center;
        }

        h2 { 
            color: #ffd700; 
            text-transform: uppercase; 
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        /* Style du tableau moderne */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 15px;
            overflow: hidden; /* Pour que les arrondis fonctionnent */
        }

        th {
            background: rgba(255, 215, 0, 0.2);
            color: #ffd700;
            padding: 20px;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        td {
            padding: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(0, 0, 0, 0.2);
        }

        tr:last-child td { border-bottom: none; }

        tr:hover td {
            background: rgba(255, 255, 255, 0.1);
            transition: 0.3s;
            cursor: pointer;
        }

        .back-link {
            margin-top: 30px;
            display: inline-block;
            color: #ffd700;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }
        .back-link:hover { color: white; transform: translateX(-5px); }
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

    <div class="table-container">
        <h2>Tableau des Résultats</h2>
        <table>
            <thead>
                <tr>
                    <th>Étudiant</th>
                    <th>Cours</th>
                    <th>Note</th>
                    <th>Mention</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>KABALA MANASSE</td>
                    <td>Informatique</td>
                    <td>18/20</td>
                    <td>Excellent</td>
                </tr>
                <tr>
                    <td>Marie Claire</td>
                    <td>Économie</td>
                    <td>15/20</td>
                    <td>Très Bien</td>
                </tr>
                <tr>
                    <td>Ben Mutamba</td>
                    <td>Génie Logiciel</td>
                    <td>19/20</td>
                    <td>Parfait</td>
                </tr>
            </tbody>
        </table>

        <a href="index.php" class="back-link">← Retour à l'accueil</a>
    </div>

</body>
</html>