<form action="" enctype="multipart/form-data" method="post">
<input id="file" name="file" type="file" />
<input id="Submit" name="submit" type="submit" value="Submit" />
</form>
<?php

// Upload and Rename File

if (isset($_POST['submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extension
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.jpg');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
	{	
		// Rename file
			move_uploaded_file($_FILES["file"]["tmp_name"], "catpic" . $file_ext);
			echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 200000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
?>