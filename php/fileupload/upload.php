<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="upload_store.php" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
        <input type="file" name="upload" />
        <input type="submit" name="submit" value="submit" />
    </form>
</body>
</html>