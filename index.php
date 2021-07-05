<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CatLocator69420</title>
	<style>
		#Sidenav a {
        position: absolute;
        left: -850px;
        transition: 1s;
        padding: 15px;
        width: 100px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 0 5px 5px 0;
      }
      
      #Sidenav a:hover {
        left: 0;
      }
      
      #contact {
        top: 310px;
        background-color: transparent
      }
	</style>
</head>
	<body background="bg.png" >
		<center>
			<h1>
				<img src="header.png" alt="header" width="1600" height="248"></h1>
		</center>
				<a href="#"></a>
				<h2 style="color:red; font-family: Arial; text-align:center"> UPDATE! Everything works. Please ignore the warning when reloading the page.</h2>
				<br>
				<p style="color:white; font-family: Arial; text-align:center"> CatLocator 69420 is a website that locates and shows cats in an image. "Why though?" I hear you ask. Well, why not?</p>
				<br>

				<div id="Sidenav" class="sidenav">
  				<a href="#" id="contact"><img src="tooltips.png"></a>
				</div>
				<br><br><br>
				<center><img class="a" src="https://art.pixilart.com/4b680819d6447f3.gif" alt="nyancat" width="512" height="288"></center>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<script src="konami.js"></script>
	<br>
	<!--upload photo-->
	<center>
		<div class="upload-btn-wrapper">
			<img src="point1.png" width="20" height="20">  <button class="btn">Choose picture</button>
				<form action="" enctype="multipart/form-data" method="post">
					<input id="file" name="file" type="file" />
		</div>  
		<div class="upload-btn-wrapper">
		<button class="btn" id="Submit" name="submit" type="submit" value="Submit picture">Upload!</button>
		</div>
				</form>
				<br>
		<div class="upload-btn-wrapper">
		<img src="point1.png" width="20" height="20">  <button class="btn" id='script' name="scriptbutton" value="Run Script" onclick="goPython()">Run Script</button>
				<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
				<script>
					function goPython(){
						$.ajax({
						url: "cat face detection.py",
						context: document.body
						}).done(function() {
						alert('finished python script');;
						});
					}
				</script>
		</div>
	</center>
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
				echo '<br><p style="color:white; font-family: Arial; text-align:center"><b>File uploaded successfully.</b></p><br>';		
			}
		}
		elseif (empty($file_basename))
		{	
			// file selection error
			echo '<br><p style="color:white; font-family: Arial; text-align:center"><b>Please select a file to upload.</b></p><br>';
		} 
		elseif ($filesize > 200000)
		{	
			// file size error
			echo '<br><p style="color:white; font-family: Arial; text-align:center"><b>The file you are trying to upload is too large.</b></p><br>';
		}
	?>
	<!--upload photo end-->



	<!--action box-->
	
	<center>
	<br>
	<div class="holder" style="display: table; margin: auto">
	<a href="result.html"><b>Show the results page!</b></a>
	<br><br>
	<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><b>Here is a link for a video showcase of the site working.</b></a>
	</center>
	</div>
	<!--action box end-->
 
	<br>

	<h3><p style="color:white; font-family: Arial; text-align:center"> The site is still under construction, however you can wait for us to finish by playing this snake game made in 15 minutes <b>(Play with WASD)</b></p></h3>
	
	<br>

	<!--Snake Game Start-->
	<p style="color:white; text-align:center">
	<canvas id="gc" width="400" height="400"></canvas>
	<script src="snake.js"> 
	</script> </a></p>
	<!--Snake Game Stop-->

	<br>
	
	<br>
				
		<center><audio controls loop >
		<source src="/song.mp3" type="audio/ogg">
		<source src="/song.mp3" type="audio/mpeg">
		</audio></center>
	
	<br>

		<!--Footer begin-->
		<div class="footer-container">
			<div class="footer">
				<div class="footer-heading footer-1">
					<h2>About</h2>
					<a href="#">Info</a>
					<a href="#">Documentation</a>
					<a href="tos.html">Terms Of Service</a>
					<a href="dmca.html">DMCA</a>
				</div>
				<div class="footer-heading footer-2">
					<h2>Contact</h2>
					<a href="mailto:dehmitros@gmail.com">Email</a>
				</div>
				<div class="footer-heading footer-3">
					<h2>Links</h2>
					<a href="#"><img src="https://logos-download.com/wp-content/uploads/2016/09/GitHub_logo.png" title="Coming soon!" width="64" height="64"></a>
					<a href="indexgr.html"><img src="https://i.imgur.com/jyFLZ6h.png" title="Ελληνικά" alt="Ελληνικά"></a>
					<a href="index.html"><img src="https://i.imgur.com/RwSuwUg.png" title="English" alt="English"></a>
				</div>
				<!-- newsletter/email form | DOESN'T WORK YET
					<div class="footer-email-form">
					<h2>Join the newsletter</h2>
					<input type="email" placeholder="Enter your email address"
					id="footer-email">
					<input type="sumbit" value="Sign Up" 
					id="footer-email-btn">
					</div> -->
			</div>
		</div>
		<!--Footer end-->

</body>
</html> 