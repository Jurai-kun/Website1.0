
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
	
	 background-color: white;
	}
	
</style>
			<link rel="stylesheet" type="text/css" href="styles.css">

			<ul class="topnav" id="myTopnav">
		
				 			
				  <li><a href="notes.php">Notes</a></li>		
				  <li><a href="diary.php" id="active">Diary</a></li>
				  <li><a href="gallery.php">Gallery</a></li>
				  <li><a href="home.php">home</a></li>	
				   <li style="float:left">
					  <img src="images/Jblogger.png " id="logo">
				  </li>
				  <li class="icon">
				    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
				  </li>
		    </ul>

		    <script>
					function myFunction() {
					    var x = document.getElementById("myTopnav");
					    if (x.className === "topnav") {
					        x.className += " responsive";						
					    } else {
					        x.className = "topnav";
					    }
					}

			</script>
			<script src='http://use.edgefonts.net/creepster.js'></script>
</head>

<body>


</body>
</html>