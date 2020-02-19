<?php 

class Product
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

}

$productOne = new Product('печенье', 100, 200);
$productOne -> InfoProduct();
$productTwo = new Product("мясо", "327", "1100");
$productTwo -> InfoProduct();
$productThree = new Product('чай', "50", "163");
$productThree -> InfoProduct();