<?php


$target_dir = "files/";

// Ensure the file storage directory is set
if (!file_exists($target_dir)) {
    mkdir('$target_dir');
}

$date = new DateTime();
// basename($_FILES["fileToUpload"]["name"])
$target_file = $target_dir . $date->getTimestamp() . '.csv';
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$fileSize = $_FILES['fileToUpload']['size'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if($fileType != "csv" && $fileType != "txt") {
        $uploadOk = 0;
        echo "Please upload a .csv or .txt file\n";
    }
    if ($fileSize > 100 * 1000 * 1000) {
        $uploadOk = 0;
        echo "Upload file is too large\n";
    }
}

// If everything went according to plan, we're good!
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        // Navigate to the display page, targeting the uploaded file
        header('Location: /display.php?file=' . $target_file);
        exit();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>