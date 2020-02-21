<?php 

// Задание. Создать класс Product и прописать в нем следующие свойства: название, цена, вес. Прописать в классе конструктор и метод, который бы публиковал всё инфо о товаре на страницу. Создать три объекта класса Product и вывести о них информацию на экран через соответствующий метод. 
//УСЛОЖНЕННОЕ ЗАДАНИЕ:  Расширить класс Product методами, которые бы выводили на экран цену товара и цену товара без учета НДС. Сделать проверку в конструкторе на передаваемый тип данных (например, цену и вес надо передавать числом, а название - строкой)

abstract class Product
{

	public $name;
	public $price;
	public $weight;

	public function __construct( string $name, int $price, int $weight) 
	{
		$this->name = $name;
		$this->price = $price;
		$this->weight = $weight;
	}

	public function InfoProduct()
	{
		echo "Это товар, который называется $this->name, он стоит $this->price рублей. Его вес составляет $this->weight грамм. <br>";
		$NDS = $this->price * 20 / 100; // Высчитываем НДС у товара
		$priceNoNDS = $this->price - $NDS;
		echo "НДС $this->name составляет " . $NDS . " рублей, а  цена самого товара без НДС составляет " . $priceNoNDS . "<br>";
	}

	public function ShowImage()
	{
		echo "<div style='border: background: {$this -> bg}'></div>";
	}
	
}

class Chocolate extends Product 
{
	public $cal;
	public $bg;

	public function __construct( string $name, int $price, int $weight, int $cal, $bg)
	{
		$this -> cal = $cal;
		$this -> bg = $bg;
		parent::__construct($name, $price, $weight);
	}

	public function InfoProduct()
	{
		echo "Это товар, который называется $this->name, он стоит $this->price рублей. Его вес составляет $this->weight грамм. Калорий у $this->name = $this->cal <br>";
		$NDS = $this->price * 20 / 100; // Высчитываем НДС у товара
		$priceNoNDS = $this->price - $NDS;
		echo "НДС $this->name составляет " . $NDS . " рублей, а  цена самого товара без НДС составляет " . $priceNoNDS . "<br>";
	}

	public function ShowImage()
	{
		echo "<div style='background: url({$this-> bg}) no-repeat center center; height:200px; width:200px;'></div>";
	}
}


class Candy extends Product
{
	public $bgI;

	public function __construct( string $name, int $price, int $weight, $bgI)
	{
		$this -> bgI = $bgI;
		parent::__construct($name, $price, $weight);
	}

	public function InfoProduct()
	{
		echo "Это товар, который называется $this->name, он стоит $this->price рублей. Его вес составляет $this->weight грамм. Калорий у $this->name = $this->cal <br>";
		$NDS = $this->price * 20 / 100; // Высчитываем НДС у товара
		$priceNoNDS = $this->price - $NDS;
		echo "НДС $this->name составляет " . $NDS . " рублей, а  цена самого товара без НДС составляет " . $priceNoNDS . "<br>";
	}

	public function ShowImages()
	{
		echo "<div style='background: url({$this-> bgI}) no-repeat center center; height:100px; width:100px;'></div>";
	}
}

$milkaChocolate = new Chocolate('милка', 99, 250, 300, 'milka.jpg');
$milkaChocolate -> InfoProduct();
$milkaChocolate -> ShowImage();


$milkaCandy = new Candy('степ', 2, 20, 'step.jpg');
$milkaCandy -> InfoProduct();
$milkaCandy -> ShowImages();


