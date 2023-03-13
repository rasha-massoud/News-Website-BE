<?php
    include("connection.php"); 

    $articles = [];
    $query = $mysqli->prepare("SELECT * FROM articles");
    $query->execute();
    $query->bind_result($id, $article_name, $img_url, $description, $website);

    while ($query->fetch()) {
        $article = [
            "id" => $id,
            "article_name" => $article_name,
            "img_url" => $img_url,
            "description" => $description,
            "website" => $website,
        ];
        $articles[] = $article;
    }

    echo json_encode($articles);
?>