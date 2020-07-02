<h1> Админ панель </h1>
<h1> Статьи </h1>
<table>
    <tr>
        <td>idArticle</td>
        <td>Заголовок статьи</td>
        <td>Текст</td>
        <td>Автор</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    <?php foreach ($articles as $article) { ?>
        <tr>
            <td><?php echo $article->getId(); ?></td>
            <td><?php echo $article->title; ?></td>
            <td><?php echo substr($article->content, 0, 200); ?></td>
            <td><?php echo $article->author_id; ?></td>
            <td>
                <form action= "/editArticle.php" method= "post" >
                    <button name="id" value="<?php echo $article->getId() ?>">
                        Редактировать
                    </button>
                </form>
            </td>
            <td>
                <form action= "/deleteArticle.php" method= "post" >
                    <button name="id" value="<?php echo $article->getId() ?>">
                        Удалить статью
                    </button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<a href="/addArticle.php"> Добавить новую статью </a>
