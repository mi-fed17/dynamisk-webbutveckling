## 1. Access modifiers, public/private

1 . Ändra klassen `Book` så att `title` och `author` är `private` i stället för `public`. Försök att skriva ut värdet på title på samma sätt som i uppgift 1.2. Du kommer att få ett felmeddelande. Vad säger meddelandet? Varför får du felet?

2 . Skapa två metoder till klassen `Book` som kan användas för att ändra egenskapen `title`. Den ena metoden ska heta `getTitle` och ska returnera värdet på den privata egenskapen `title`. Den andra metoden ska heta `setTitle(x)` och ska ändra värdet på title till något som man skickar som argument till funktionen.

3 . Skapa `get`- och `set`-metoder till egenskapen `author`.

4 . Gör alla egenskaper för klassen `Car` privata. Behöver du ändra något för att funktionen `printInfo` ska fungera?

5 . Skriv en metod med namnet `changeCar`. Den ska ta tre parametrar: `model`, `color` och `price`. När man anropar den ska den ändra värdet på de privata egenskaperna.

## 2. Statiska egenskaper och metoder

1 . Lägg till en publik statisk variabel i klassen `Car` med namnet `NumberOfCars` som är 0. Varje gång ett `Car` objekt skapas ska `NumberOfCars` räknas upp med 1. Skapa några Car-objekt och kontrollera att variabeln räknas upp korrekt.
[PHP.net: Static Keyword](http://php.net/manual/en/language.oop5.static.php)

2 . Lägg till en statisk egenskap till classen `Product` som innehåller namnet på vilken butik man kan köpa produkten i. Skriv sedan ut namnet på butiken med `echo`.


## 3. Arv

1 . Skriv en klass som ärver från en annan klass. Basklassen ska vara något generellt och subklassen något mer specifikt. Skapa objekt av båda klasserna för att kontrollera att du har gjort rätt. Det vet du om subklassen kan allt som basklassen kan.

2 . Skapa två publika metoder i basklassen från förra uppgiften. Metoderna ska skriva ut något så att man ser att de körs. Lägg till en av metoderna i subklassen. Skapa ett objekt av subklassen och testa vad som händer när du anropar båda funktionerna från basklassen.

3 . Ändra metoden i subklassen så att den även anropar metoden i basklassen med hjälp av parent.

4 . Skriv minst fyra klasser som motsvarar olika djur. Alla djur ska ha `Animal` som första basklass. Andra basklasser som kan vara bra att ha med är `Bird`, `Mammal`, `Fish` osv. Se till att de ärver från `Animal` och att klasserna för respektive djur ärver från rätt klass.

5 . Implementera `Vehicle`-hierarkin som finns på slides. `Vehicle` ska ha samma egenskaper som i tidigare övningar, men nu ska de vara `protected`. Du ska ha klasserna `Vehicle`, `Bicycle`, `Boat`, `Car`, `Motorboat` och `Sail`. `Vehicle` ska ha en metod som heter `goTo`, som tar en parameter. Funktionen ska skriva ut _"Färdas till [parametern] <br>"_ med `echo`. Skapa ett objekt av varje klass och anropa `goTo` med ditt favoritresmål.

6 . Gör så att klasserna som ärver från `Vehicle` skriver över `goTo` från `Vehicle` med egna metoder. De ska skriva ut liknande saker som `Vehicle::goTo`, men det ska framgå vilket fordon man åker med. Till exempel _"Färdas med bil till [resmål] <br>"_. Dessutom ska funktionerna anropa basklassens `goTo`.

7 . Använd konstruktorfunktioner i `Vehicle ` och alla subklasser. Observera att en subklass ska anropa basklassens konstruktor innan den gör något annat.

<summary></summary>

## 4. Abstrakta klasser och interface

1 . Skapa en abstrakt klass med minst en abstrakt metod. Skapa en klass som ärver från den och implementerar den abstrakta metoden.

2 . Gör `Vehicle` och `Animal` abstrakta. Kontrollera att det inte går att skapa objekt av klasserna `Vehicle` och `Animal`.

3 . Skapa ett `interface` och en klass som implementerar det.

4 . Skapa ett interface med namnet `iNoiseMaker`. Det ska innehålla en metod med namnet `makeNoise`. Ändra minst två djurklasser så att de implementerar interfacet. Lägg till en klass `Robot` som implementerar `iNoiseMaker` men inte ärver från `Animal`.

## Extra

###### Skapa en Todo-list

Testa att implementera en Todo-list med PHP-classes. Du behöver nog inte använda något arv men måste få två klasser att synka med varandra, liknande `SingleBookLibrary`.

Du behöver alltså skapa minst två klasser `Tasks`/`Todos` och `Task/Todo`. `Tasks` ska hantera de olika `Task` och spara dessa i en array. Men alla `Task` ska vara en instans av klassen `Task`. 

Man tänka sig följande upplägg på `Task`:

```php
class Task
{
    private $title;
    private $createdAt;
    private $complete = false;
}
```




## Lösningsförslag

```php
<?php
/*=================================
=            Car Class            =
=================================*/


class Car {
  private $model;
  private $color;
  private $price;
  private $sellDate;

  public function __construct($model, $color, $price, $sellDate = "2017-04-18") {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
    $this->sellDate = "2017-03-27";
    // TODO: använd date(..)
  }
  public function printInfo() {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
  public function halfPrice() {
    $this->price = $this->price / 2;
  }
  public function changeCar($model, $color, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  }
}

$car1 = new Car('Tesla', 'silverfärgad', 1000000);
$car1->halfPrice();
$car1->changeCar('Fiat', 'blå', 80000);
$car1->printInfo();


/*===============================================
=            SingleBookLibrary Class            =
===============================================*/


class SingleBookLibrary {
  public $book;
  public $isBorrowed;

  public function borrow() {
    if( $this->isBorrowed ) {
      echo "Boken är redan utlånad.<br>";
    } else {
      echo "Boken var inte utlånad, det går bra att låna.<br>";
      $this->isBorrowed = true;
    }
  }
}
$library = new SingleBookLibrary();
$library->isBorrrowed = false;
$library->book = new Book('Pesten', 'Albert Camus');
  // Book har egenskaperna: title, author
$library->borrow();
$library->borrow();
$library->borrow();


/*====================================
=            Animal Class            =
====================================*/

abstract class Animal 
{
  protected $eyeCount;
  abstract public function printAnimal();
}

class Mammal extends Animal 
{
  protected $liveBabies;
  public function printAnimal() {
    echo "Här är ett däggdjur <br>";
  }
}

class Bear extends Mammal 
{
  public $furColor;
}

abstract class Fish extends Animal 
{
  protected $habitat;
  public function __construct() {
    $this->habitat = 'underwater';
  }
}

class Tuna extends Fish {
  public $isPredator = true;
  public $waterType = 'salt';

  public function printAnimal() {
    echo "Här är en tonfisk. Den finns $this->habitat <br>";
  }
}


$bear = new Bear();
$tuna = new Tuna();
$bear->printAnimal();
$tuna->printAnimal();

/*====================================
=            Planet Class            =
====================================*/

//Example of how you can call the parent class from the sub class

class Planet {
  protected $name;
  protected $orbitDays;

  public function __construct($name, $orbitDays) {
    $this->name = $name;
    $this->orbitDays = $orbitDays;
  }
  public function visit() {
    echo "Välkommen till $this->name! Ett varv runt solen tar $this->orbitDays. <br>";
  }
}

class Jorden extends Planet {
  protected $population;

  public function __construct($population) {
    parent::__construct('Jorden', 365.25); //calling parent constructor
    $this->population = $population;
  }
  public function visit() {
    parent::visit();
    echo "Befolkning: $this->population miljarder.<br>";
  }
}

$mars = new Planet('Mars', 687);
$jorden = new Jorden(7.5);

$mars->visit();
$jorden->visit();
```
