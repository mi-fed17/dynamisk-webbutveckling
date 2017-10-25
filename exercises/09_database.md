# Databasuppkoppling

Inga övningar nedan mest en översikt över de funktioner vi ska använda för uppgiften.

* [PHP.net: PDO construct](http://php.net/manual/en/pdo.construct.php)
* [PHP.net: PDO prepare](http://php.net/manual/en/pdo.prepare.php)
* [PHP.net: Superglobals](http://php.net/manual/en/language.variables.superglobals.php)
* [W3Schools - Prepared Statements](https://www.w3schools.com/php/php_mysql_prepared_statements.asp)

##### Skapa en `PDO` - uppkoppling till databasen

```php
/* Always check your own details for connecting
 * 'dbname' is the database, 'localhost' is MySQL in MAMP
 * 'charset' is to get the right encoding, åäö etc. */
$pdo = new PDO(
    "mysql:host=localhost;dbname=products;charset=utf8",
    "root", //user
    "root"  //password
);
```

##### Fetch Associative Array

```php
//Prepare a SQL-statement
$statement = $pdo->prepare("SELECT * FROM celebrities");
//Execute it
$statement->execute();
//And fetch every row that it returns. $celebrities is now an Associative array
$celebrities = $statement->fetchAll(PDO::FETCH_ASSOC);
```

##### Post with parameters

```php
//:name is a placeholder for the value that we collect from the $_POST parameter
$statement = $pdo->prepare("SELECT * FROM celebrities WHERE name = :name");
$statement->execute(array(
    ":name"     => $_POST["name"],
));
$celebrities = $statement->fetchAll(PDO::FETCH_ASSOC);
```

## Delete from database

```php
//:name is a placeholder for the value that we collect from the $_POST parameter
$statement = $pdo->prepare("DELETE FROM celebrities WHERE id = :id");
$statement->execute(array(
    ":id"     => $_POST["id"],
));
//No need to fetch when doing delete as we are not collecting information
//we are just sending information to the database
```

<summary></summary>

## Insert into database

```php
/* The first parantheses are the columns you want to insert into. The second
 * parantheses are the placeholders for the values you want to insert. So the
 * statement isn't populated until the 'execute'-function runs. We don't need
 * to supply ID because that is created automatically.
 */
$statement = $pdo->prepare(
    "INSERT INTO celebrities (name, born, country) 
    VALUES (:name, :born, :country)"
);
/* 
 * In the execute statement you insert the actual values from your form submit. 
 * The argument to 'execute()' is an associative array. The keys are the 
 * placeholders from the prepared statement and the values are the ones from
 * the form
 */
$statement->execute(array(
    ":name"     => $_POST["name"],
    ":born"     => $_POST["born"],
    ":country"  => $_POST["country"]
));
```

##### Pretty print

Använd för att få en snygg output på era arrayer. Ersätt `$your_variable` med namnet på den variabeln ni hämtar.

```php
highlight_string("<?php =\n" . var_export($your_variable, true) . ";\n?>");
```
