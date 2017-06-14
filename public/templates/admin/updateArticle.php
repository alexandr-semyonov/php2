<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <link type="text/css" rel="stylesheet" href="/css/style.css" />
</head>
<body>

<div class="container">
    <div class="article">

        <h4>Редактировать статью</h4>
        <form action="/admin/update.php" method="post">
            Автор:
            <select name="author_id">
                <option value=""></option>

                <?php foreach ($authors as $author): ?>

                <option value="<?php echo $author->id; ?>" <?php if ($author->id == $article->author_id){?> selected<?php } ?>>
                    <?php echo $author->name; ?>
                </option>

                <?php endforeach; ?>

            </select>
            Заголовок:
            <input type="text" name="header" value="<?php echo $article->header; ?>" required>
            Текст:
            <textarea name="text" required><?php echo $article->text; ?></textarea>
            <input type="hidden" name="id" value="<?php echo $article->id; ?>">
            <input type="submit" name="edit" value="Отправить">
        </form>
    </div>
</div>

</body>
</html>