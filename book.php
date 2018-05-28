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
	<?php 
	$mysqli = new mysqli("localhost", "asay13", "", "task-php");
	$mysqli->set_charset("utf8");
    	$query = "SELECT * FROM books WHERE id = ".$_GET["ID"].";";
    	$result = $mysqli->query($query);
    	while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    		echo '<div>
					<h1>'.$row["name"].'</h1>
				</div>
				<div class = "book-detail">
					<div class = "book-detail-img">
				    	<img src="'.$row["photo"].'"></img>
				    </div>
				     <div class = "book-text">
				        <span class = "book-text-bold">Автор:</span> '.$row["autor"].'
				    </div>
				   <div class = "book-text">
				        <span class = "book-text-bold">Год печати:</span> '.$row["year"].'
				    </div>
				    <div class = "book-text">
				        <span class = "book-text-bold">Жанр: </span>'.$row["genre"].'
				    </div>
				    <div class = "book-text">
				        <span class = "book-text-bold">Серии: </span>' .$row["series"].'
				    </div>
				    <div class = "book-text">
	        			<span class = "book-text-bold">Описание: </span>'.$row["anons"].'</div></div>
    		';	
    	}
	?>
	    
	    
	<h2>Ваш отзыв о книге</h2>
			<form class="transparent" action="add.php" method="post">
			   <div class="form-inner">
			     <label for="username">Имя пользователя</label>
			     <input type="text" id="username" name="name">
			     <label for="review">Отзыв</label>
			     <input id="review" type="textarea" name="review">
			     <?php
			     echo '<input type="hidden" name="bookId" value="'.$_GET["ID"].'">';
			     ?>
			     <input type="submit" value="Отправить">
			  </div>
			</form>
	
</body>
	    
</html>