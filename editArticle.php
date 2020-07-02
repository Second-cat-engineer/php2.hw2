<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$article = Article::findById($_POST['id']);

include __DIR__ . '/App/templates/admin/editArticle.php';