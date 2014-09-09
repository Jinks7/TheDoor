<!DOCTYPE HTML?>

<head>

    <title>The Door</title>
    <script>
    </script>
    <script>
    </script>
    <script>
    </script>
    
    <link rel="stylesheet" href="css/style.css" type="text/css" />
     
</head>

<body>
<section class="container">
  <nav>
    <ul class="nav">
      <li><a href="index.php" title="Home">Home</a></li>
      <li><a href="gallery.php" title="Galleries">Galleries</a></li>
      <li class="active"><a href="videos.php" title="Videos">Videos</a></li>
	  <li><a href="#">Log Out</a></li>
	  <li class="filler"></li>
    </ul>
  </nav>
</section>
<div id="content">
  <div id="main">
  
  </div>
  
<?php
	include('sidebar.php');
?>
	<form name="search">
		<label for="search"><b>Search:</b></label><br>
		<input type="text" name="search" />
		<input type="submit" name="submit" value="Search" />
	</form>
  </div>
</div>	

</div>
</body> 

</html>