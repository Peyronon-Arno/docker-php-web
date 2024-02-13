<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Liste</title>
</head>
<body>
   <h1>Liste</h1>
   <table>
    <tbody>
   <?php
    echo '<tr><td>ID</td><td>NOM</td></tr>';
    $pdo = null;
    try {
        $pdo = new PDO('mysql:host=mariadb;port=3306;dbname=test;charset=utf8', 'root', 'example');
    } catch (Exception $e) {
        echo $e;
    }
    $res = array();
    if (isset($pdo)) {
        $stmt = $pdo->query("SELECT * FROM Data ORDER BY nom");
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
            echo '<tr><td>', $row['id'], '</td><td>', $row['nom'], '</td></tr>';
    } else {
        echo '<tr><td>0</td><td>Aucun</td></tr>';
    }
   ?>
     </tbody>
    </table>
</body>
</html>
