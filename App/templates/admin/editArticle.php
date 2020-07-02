<h1> Редактирование статьи </h1>

<form action="/saveEditArticle.php" method="post">
    <textarea name="title" cols="100" rows="2"><?php echo $article->title; ?></textarea>
    <br>
    <textarea name="content" cols="100" rows="30"><?php echo $article->content; ?></textarea>
    <br>
    <button type="submit" name="id" value="<?php echo $article->getId(); ?>">
        Сохранить
    </button>
</form>