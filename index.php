<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lego Inventory Viewer</title>
</head>

<body>
    <p>This is a site to view lego parts inventories in a compact and printable way</p>
    <p>This site is designed as to use minimal printing ink and paper</p>
    <br>


    <!-- I guess we should have a form to upload, yeah? -->
    <!-- Then we can redirect to the viewer page? -->

    <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Upload Inventory CSV

            <!-- The hidden input can be used to pass along more params to the php script -->
            <!-- Accessed via $info = $_POST["info"]; -->
            <input type="hidden" name="info" value="fromPage">
            <input type="file" name="fileToUpload" id="fileToUpload" accept=".csv, .txt">
            <input type="submit" id="submit-upload" value="Upload CSV" name="submit">
        </form>
    </div>







</body>

</html>