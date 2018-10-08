<!DOCTYPE html>
<html>
<head> MVC3 </head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $categorie) : ?> <!-- Boucle qui permet de récuperer le nom de l'item -->
            <li><?= $categorie['categorie'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>

