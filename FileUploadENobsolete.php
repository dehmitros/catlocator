<?php
    if (isset($_FILES['upload'])) {
        $uploadDir = 'C://xampp//htdocs//';
        $uploadedFile = $uploadDir . basename($_FILES['upload']['name']);
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadedFile)) {
			echo '<body background="https://i.imgur.com/PKW0fFj.png" >';
			echo '<p style="color:white; font-family: Arial;">File was uploaded successfully.</p>';
        } else {
            echo '<body background="https://i.imgur.com/PKW0fFj.png" ><p style="color:white; font-family: Arial;">There was a problem saving the uploaded file</p>';
        }
        echo '<br/><a href="index.html">Return to homepage to continue with the script</a>';
    } else {
    ?>
        <form action="FileUpload.php" method="post" enctype="multipart/form-data">
            <label for="upload">File:</label>
            <input type="file" name="upload" id="upload"><br/>
            <input type="submit" name="submit" value="Upload">
            </form>
        <?php
    }
?>









$target_dir = "C://xampp//htdocs//";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["upload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" ) {
    echo "Sorry, only JPG files are allowed.";
    $uploadOk = 0;
}
// if everything is ok, try to upload file
 else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}