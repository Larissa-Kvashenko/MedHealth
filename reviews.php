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
    <div class = "forms">
        <h3><strong>Оставьте свой отзыв! </strong> </h3>
    <form action="" method="post">
        <div><input type="text" placeholder="Name" name="name" size = "43px" maxlenght="32" pattern="^{1,32}$"  required /></div>
        <div><input type="email" placeholder="E-mail" name="email" size = "43px" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/></div>
        <div><textarea placeholder="Message" name="comment" rows="10" cols="45" required></textarea></div>
        <div><input type="submit" name="send" value="Send"  /></div>
    </form>

   <?php
     if(isset($_POST['send'])){  
     $name = strip_tags(trim($_POST['name']));
     $email =strip_tags(trim($_POST['email']));
     $comment = strip_tags(trim($_POST['comment']));

     $link = mysqli_connect("localhost", "root", "", "hospital") or die (mysql_error ());
     $link->query("SET NAMES utf8");
     $insert = "INSERT INTO reviews(name, email, comment) VALUES ('$name', '$email', '$comment')";
     mysqli_query($link, $insert);
     mysqli_close($link);
     header("Location: //localhost/site/reviews.php");//редирект;
     exit;
     }
     ?>
    </div>
    <div class = "comments">
    <h3>Последние 5 отзывов:</h3></br>

        <?php 
        $link = mysqli_connect("localhost", "root", "", "hospital") or die (mysql_error ());
        $link->query("SET NAMES utf8");
        $strSQL = "SELECT * FROM reviews ORDER BY id DESC LIMIT 5";


            $rs = mysqli_query($link, $strSQL);


            while($row = mysqli_fetch_array($rs)) {



              echo"<hr></hr>";
              echo $row['name'] . "<br />";
              echo "<strong>".$row['email']."</strong> : \"".$row['comment']."\"";
              echo"<hr></hr>";
              echo"</br>";

              }
              mysqli_close($link);
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