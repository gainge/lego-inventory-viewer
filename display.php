<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
</head>
<body>
    <?php 
        include('./util.php');
        $fileName = isset($_GET[FILE_HEADER]) ? $_GET[FILE_HEADER] : 'DNE';
        $filePath = createFilePath($fileName);

        echo $fileName;

    ?>


    <br>

    <a href="/">Home</a>
</body>
</html>