<!DOCTYPE html >
<html>

    <head>
        <title>MVC</title>
        <link href="/template/css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <?php foreach ($newsList as $newsItem): ?>
            <div align="center">
                <?php echo $newsItem['title']; ?>
                <?php echo $newsItem['date']; ?>
                <?php echo $newsItem['short_content']; ?>

            </div>
        <?php endforeach; ?>
    </body>

</html>