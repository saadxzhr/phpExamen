<?php $this->titre = "Mon Blog"; ?>

<?php foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>

<form method="post" action="index.php?action=ajouterBillet">
    <input id="titre" name="titre" type="text" placeholder="titre" 
           required /><br />
    <textarea id="contenu" name="contenu" rows="4" 
              placeholder="Votre Billet" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Ajouter" />
</form>
