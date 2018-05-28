<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8">
<title>Сайт Анастасии</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts.js"></script>
<link rel="stylesheet" href="stile.css">
</head>

<body>
	<ul class="menu">
		<li id="menu-first">
			<a href="/">Главная</a>
		</li>
		<li id="menu-second">
			<a href="gallery.html">Галерея</a>
		</li>
	</ul>
	
	<div>
		<h1>Каталог книг</h1>
	</div>
	
	<div>
		<?php
		$mysqli = new mysqli("localhost", "asay13", "", "task-php");
		$mysqli->set_charset("utf8");
    	$query = "SELECT id, anons, photo FROM books;";
    	
    	$result = $mysqli->query($query);
    	while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    		echo '
    		<div class="col">
	    		<div>
	    			<a href="book.php?ID='.$row["id"].'">
						<img src="'.$row["photo"].'"></img>
					</a>
					<div class="col-text">
						<div>'.$row["anons"].'</div>
						<a href="book.php?ID='.$row["id"].'">подробнее...</a>
						</div>
					</div>
				</div>';
			}?>

	</div>
</body>
</html>