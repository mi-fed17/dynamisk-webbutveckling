# Inlämningsuppgift 2 - TODO

Målet med uppgiften är att fokusera på följande:
* Grundläggande **CRUD**
* Databashantering
* **PDO** - Knyta ihop PHP & MySQL
* Användande av `$_GET` samt `$_POST`
* Grundläggande **versionhantering** med `git` samt **GitHub**

## Metod

Eleven skickar in en `.zip`-fil med projektets tillhörande filer, `.php`, `.css/.scss` samt eventuella bilder. På själva sidan som du skapat ska det finnas en `footer` med länk till ditt **GitHub**-repository samt ditt användarnamn på **GitHub**.

**Inlämningtid: 27/10 16.30**
Lämnas in via zenit


## Uppgiftbeskrivning

Du ska skapa en TODO-applikation som visar upp information hämtad från databasen. Alla uppdateringar ska ske via databasen och **PDO**.

Applikationen ska även **versionshanteras**. Du ska använda **git** via terminalen för att skapa commits och spara dina ändringar. När du är färdig med din applikation ska du även _pusha_ upp din källkod på **GitHub**.

## Krav för G

* Din tabell för **TODOS** ska se ut följande:

|   id    |       title     |   completed    |      createdBy    |
|   --- | ----  |     ---      |      ---     |
| A_I | VARCHAR | BOOLEAN    | VARCHAR      |

* När man kommer till sidan ska alla _todos_ listas upp. Dessa _todos_ hämtas från databasen med hjälp av **PDO**.
* Man ska kunna lägga till en ny _todo_ och då ska denna sparas i databasen.
* Varje gång man har lagt till en ny todo ska man skickas tillbaka till samma sida samt att det ska finnas en meddelande som säger att skapandet av todon lyckades samt att den nya _todon_ ska ligga i längst upp i listan. [PHP.net: header()](http://php.net/manual/en/function.header.php)
* Man ska kunna radera en _todo_, då tas den bort helt från databasen.
* Man ska kunna markera en _todo_ som utförd/completed. Om en _todo_ är utförd/completed ska denna läggas i en separat lista längre ner. Man ska tydligt se vilka _todos_ som är avklarade och vilka som inte är det. 

<summary></summary>

## Krav för VG

* Uppfyller alla krav för G
* Man ska kunna redigera titeln på en todo.
* Man ska inte kunna lägga till två todos med samma titel.
* Lägga till en till kolumn på varje _todo_: `priority`. Man ska sedan med ett knapp tryck kunna sortera listan av oavklarade _todos_ via denna prioritet. Man ska även se i listan på sidan vilken prioritet dessa _todos_ har.


## Övrig bedömning

* Snyggt och användbart gränssnitt. Det är inte bara PHP-koden som tas in i bedömningen. Förmågan att strukturera upp sin sida med HTML & CSS spelar också in. Man får använda sig av css-ramverk men var lite sköna och skriv cssen själv. (**PSSST, det finns andra ramverk än Bootstrap, t.ex. _spectre.css_/_bulma.css_/_skeleton.css_ etc. [http://www.cssreflex.com/css-frameworks/](http://www.cssreflex.com/css-frameworks/)**)
* Snyggt skriven kod. Detta innefattar konsekvent och korrekt namngivning av variabler, korrekt intabbning av koden och en logisk kodföljd. 
* Förmåga att välja och använda rätt variabler, loopar, statements och funktioner på ett smart sätt.
* Förmåga att självständigt strukturera upp och genomföra en uppgift.
