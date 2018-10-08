<?php
namespace Model;

require __DIR__ . '/../../app/db.php';

// récupération de toutes les categories de caca
class CategoriesManager {
    public function selectAllCategories() :array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM categories";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    // la méthode prend l'id en paramètre
    public function selectOneCategorie(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM categories WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }
}
?>