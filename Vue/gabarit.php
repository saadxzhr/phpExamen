<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite  la bienvenue sur ce modeste blog.</p>
                <?php 
                if (isset($_SESSION['currentUser'])) {
                    echo "<form method='post' action='index.php?action=logout'>  
                    <input type='submit' name='logout' value='Se deconnecter' /> 
                    </form> 
                    <p> user:";
                    echo $_SESSION['currentUser'];
                }
                ?>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>