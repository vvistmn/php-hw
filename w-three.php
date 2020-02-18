<?php 

// Задание 1. Создать массив, записать в него их основные отличия и вывести этот массив на экран

$arr = [
 'get' => ['запрос мы можем увидеть в браузере', 'данные отправляются не засекреченными', 'объем передаваемых данных не должен превышать 8 кбайт'],
 'post' => ['запрос скрыт от глаз (авторизация и прочая секретная информация вводится через $_POST - запросы)', 'Передает информацию через НТТР заголовки', 'можно отправлять картинки и файлы на сервер', 'чтобы отправить данные этим методом, необходимо в форме указать это, потому что изначально все передается $_GET - запросом'],
];

echo "<pre>";
var_dump($arr);
echo "</pre>";

if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['age'])) {
	echo "Привет, меня зовут " . $_GET['name'] . ' ' . $_GET['surname'] . ". Mой возраст " . $_GET['age'];
	die();
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if (isset($_POST['name-of-post']) && isset($_POST['surname-of-post']) && isset($_POST['age-of-post'])) {
	echo "Привет, меня зовут " . $_POST['name-of-post'] . ' ' . $_POST['surname-of-post'] . ". Mой возраст " . $_POST['age-of-post'];
	die();
}

echo "<br>";

$birthday = $_GET['date'];
$dateA = new DateTime($birthday);
$dateB = new DateTime();
$interval = $dateB -> diff($dateA);

$oldAge = $interval -> format("Полных лет: %Y");
$noDate = "Полных лет: 00";

if ($oldAge == $noDate) {
	echo "Я не смог рассчитать сколько Вам лет. Возможно, Вы неправильно ввели дату Вашего рождения.";
} elseif ($oldAge <> $noDate) {
	echo $oldAge;
}


?>

<!-- Задание 2. Создать форму с тремя инпутами для ввода имени, фамилии и возраста -->

<form action="">
	<input type="text" name="name">
	<input type="text" name="surname">
	<input type="text" name="age">
	<input type="submit">
</form>

<!-- Задание 3. Создать еще 1 форму и сделать то же самое, но через POST-запрос -->

<form action="" method="post">
	<input type="text" name="name-of-post">
	<input type="text" name="surname-of-post">
	<input type="text" name="age-of-post">
	<input type="submit">
</form>

<!-- ДОПОЛНИТЕЛЬНОЕ ЗАДАНИЕ. Создать форму с одним инпутом, через которую пользователь может ввести дату своего рождения. После отправки формы на экране показывается количество его полных лет -->

<form action="">
	<input type="text" name="date" placeholder="Введите дату своего рождения Д.М.Г">
	<input type="submit">
</form>