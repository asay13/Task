<html>
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
      $query = "insert into review (name, review, book) 
      values ('".$_POST['name']."', '".$_POST['review']."', '".
      $_POST['bookId']."')";
      if($mysqli->query($query))
        echo "Даные добавлены";
      else
        echo "Произошла ошибка";
?>
</body>
</html>