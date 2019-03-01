<?php

require_once '../../application/db.php';
$pdo = new DataBase();

$result = $pdo->pdo->query('SELECT * FROM archive;');
$result = $result->fetchAll(PDO::FETCH_ASSOC);

$post = $result;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atcon</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/IndexStyles.css">

</head>

<body>

	<header>
		<h2><a href="../../index.php" style="color: black;">Atcon.kz</a></h2>
		<nav>
			<li><a href="../../index.php" style="color: black;">Главная</a></li>
			<li><a href="#" style="color: black;">Архив</a></li>
			<li><a href="contact.php" style="color: black;">Контакты</a></li>
		</nav>
	</header>


	<section class="features">
		<h3 class="title">Для Акционеров и партнеров</h3>
		<p><?php echo $post[0]['rus'];?></p>
		<hr>
        <p><?php echo $post[0]['kaz'];?></p>
		
	</section>



	<footer>
		<ul>
			<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
			<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#"><i class="fa fa-github-square""></i></a></li>
        </ul>
        
        <p>© <?=date('Y');?> Алматытелефонстрой.</p>
        <p>Все права защищены.</p>
    </footer>

</body>

</html>