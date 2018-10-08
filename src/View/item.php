<!DOCTYPE html>
<html>
<head> MVC3 </head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item) : ?> <!-- Boucle qui permet de récuperer le nom de l'item -->
                <li><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
</body>
</html>

