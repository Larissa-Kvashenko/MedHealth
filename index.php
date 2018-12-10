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
		<div class="department_block">
			<div class="department" id="therapist">
				<h1 id="title_white">Терапевтическое отделение</h1><p>Терапевтическое отделение предназначено для пациентов, которым проводят диагностику, лечение и реабилитационные мероприятия при заболеваниях терапевтического характера.</p>
			</div>
			<div class="department" id="diagnostic">
				<h1 id="title_white">Диагностическое отделение</h1><p>Диагностические отделения - это отделения, где проводятся целенаправленные исследования для оценки здоровья, состояния и функций органов и систем, физического и психического развития, профессиональной пригодности, с целью профилактики, диспансеризации, а также для определения природы заболевания.</p>
			</div>
			<div class="department" id="cardiologist">
				<h1 id="title_white">Кардиологическое отделение</h1><p>В кардиологическом отделении проводится работа по оказанию специализированной помощи пациентам, страдающим различными сердечно-сосудистыми заболеваниями.</p>
			</div>
			<div class="department" id="surgeon">
				<h1 id="title_white">Хирургическое отделение</h1><p>Хирургическое отделение – это коллектив высококвалифицированных специалистов различных областей хирургии (общая хирургия, сосудистая хирургия, травматология и ортопедия, проктология, урология, эндоскопия, маммология и эндокринная хирургия).</p>
			</div>
		</div>
			

		<div class="service_block">
			<div class="service">
				<div class="sweety_kitty"></div>
			</div>
			<div class="service">
				<div class="sweety_kitty"></div>
			</div>
			<div class="service">
				<div class="sweety_kitty"></div>
			</div>
			<div class="service">
				<div class="sweety_kitty"></div>
			</div>	
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




