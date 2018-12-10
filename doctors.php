<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="hospital, hospital kyiv, larissa verbitskaya, MedHealth, Забота о Вашем здоровье, Елена Егорова Диагностик">
    <meta description="Современная клника, оснащенная новейшим оборудованием. Мы гарантируем спокойную и тихую атмосферу, доброжелательность, качественное обслуживание, доступные цены.">
    <meta name="robots" content="index, follow">
    <meta name="DC.title" content="MedHealth - забота о Вашем здоровье">
	<title>HOSPITAL &#10010</title>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<nav>
		<div class="nav_logo">
			<button onclick="location.href='index.php'"></button>
		</div>
		<div class="nav_menu">
			<button class="fonts">Услуги</button>
			<button class="fonts" onclick="location.href='doctors.php'">Врачи</button>
			<button class="fonts">Отделения</button>
			<button class="fonts">О нас</button>
		</div>
		<div class="nav_search">
			<button onclick="openElement('search_input'); openElement('search_submit');"></button>
		</div>
	</nav>
			<form class = "search_form">
				<input type="search" placeholder="Введите название отделения"name="search" id="search_input"/>
				<input type="submit" value="Поиск" id="search_submit"/>
			</form>
	<header>
		<div class="left_header">
			<p id="main_title_header">
				MedHealth - забота о Вашем здоровье
			</p>
			<p id="title_header">Современная клника, оснащенная новейшим оборудованием. Мы гарантируем спокойную и тихую атмосферу, доброжелательность, качественное обслуживание, доступные цены. Клиника работает по страховым полисам и предлагает услуги выбранных Вами врачей.</p>
		</div>
		<div class="right_header">
			<button onclick="location.href='reviews.php'">Оставьте отзыв</button>
		</div>
	</header>
	<article>
		
		<?php	
	$conn = mysqli_connect('localhost', 'root', '', 'hospital');
	$conn->query("SET NAMES utf8");
// проверка связи
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);//выборка по запросу в резалт

if ($result->num_rows > 0) 
	{
    // выводит инфу для каждой строки
    while($row = $result->fetch_assoc())
    	{
    		echo "<div id='doctors'>";
    		echo "<img src='".$row["photo_url"]."' width='200px' height='150px'>";
        	echo "<div id='doctors_text'>";
        	echo "<p><strong> " . $row["name"]. " " . $row["surname"]. "</strong>, <em>".$row["type"]."</em></p>";
        	echo "<p>".$row["description"]."</p>";
        	echo "</div>";
        	echo "</div>";
    	}
	} 
	else
		{
    		echo "0 results";
		}
$conn->close();
		?>
	</div>
	</article>
	<footer>
		<img src="img/phone.png" id="logologo"></img>
		<div>
			<canvas id="myCanvas" width="200" height="200">Your browser does not support Canvas.</canvas>
		</div>
		<div></div>
	</footer>
	<script src="script.js"></script>
</body>
</html>




