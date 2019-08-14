<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Inventory</title>
</head>
<body>
    <?php 
        function buildLegoComponent($count, $image, $partID) {
            echo "<div class='item'>";
            echo    "<p class='id'>" . $partID . "</p>";
            echo    "<img src='" . $image . "' />";
            echo     "<p>" . $count . "</p>";
            echo "</div>";
        }
    ?>

    <?php 
        include('./util.php');
        $fileName = isset($_GET[FILE_HEADER]) ? $_GET[FILE_HEADER] : 'DNE';
        $filePath = createFilePath($fileName);

        if (is_file($filePath)) {
            // Let's display the parts list!
            $f = fopen($filePath, "r");


            // Read the lines of the CSV file
            // We'll kind of be assuming that it follows the format of that one site, sooo
            // Write out the containing div
            echo "<div class='container'>";

            $row = -1;
            while (($line = fgetcsv($f)) !== false) {
                $row++;

                if ($row == 0) continue;
                if (sizeof($line) <= 1) {
                    echo "<div class='break'></div>";

                    if (sizeof($line) == 1) {
                        echo "<h1>" . $line[0] . "</h1>";
                        echo "<div class='break'></div>";
                    }

                    continue;
                }

                // otherwise, we write out the component

                $partID = $line[1];
                $count = $line[2];
                $image = $line[7];

                buildLegoComponent($count, $image, $partID);
            }

            // Write end of container div
            echo "</div>";

            fclose($f);
        } else {
            echo "Requested File Not Found";
        }

    ?>


    <br>

    <a class='no-print' href="/">Home</a>
</body>
</html>