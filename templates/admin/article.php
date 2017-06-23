<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <link type="text/css" rel="stylesheet" href="/css/style.css" />
</head>
<body>

<div class="menu">
    <div class="right"><a href="/admin/news">Администрирование</a></div>
    <div class="left"><a href="/news">Главная</a></div>
</div>
<div class="container">
    <div class="news">
        <div><a href="/admin/news/delete/?id=<?php echo $this->article->id; ?>" class="delete right"></a></div>
        <div><a href="/admin/news/edit/?id=<?php echo $this->article->id; ?>" class="update right"></a></div>
        <div><a href="/admin/news/edit" class="add right"></a></div>

        <h4><?php echo $this->article->header; ?></h4>
        <div class="date"><?php echo $this->article->date; ?></div>
        <div class="text"><?php echo $this->article->text; ?></div>
        <div class="author">

            <?php
            if (null !== $this->article->author_id){
                echo $this->article->author->name;
            }
            ?>

        </div>
    </div>
</div>

</body>
</html>