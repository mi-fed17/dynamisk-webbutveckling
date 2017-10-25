# Inlämningsuppgift 1 - Shopping! 💸

## Mål

Målet med uppgiften är att examinera dina kunskaper i följande moment:
* **Grundläggande programmering**
* **Variabler och olika variabeltyper**
* **Loopar**
* **Statements**
* **Boolska operatorer**
* **Funktioner**
* **Grundläggande formulärhantering**

## Uppgiftsbeskrivning

Din uppgift är att skapa en webbsida som är grunden till ett **beställningsformulär** för diverse produkter. Produkterna som du ska skriva ut finns färdiga i `products.php` på zenit. 

Informationen ska presenteras på ett snyggt sätt med hjälp av *HTML* och *CSS*, och du ska påvisa att du kan integrera PHP-kod med HTML- och CSS-kod. 
[_PHP echo cheat sheet_](https://gist.github.com/jesperorb/2fac1429b7fa30a685ab59f8a306d562)


**Följande tekniska krav ska uppfyllas:**

* Sidan ska innehålla dagens datum, formaterat enligt följande: **onsdag den 8 oktober 2048**
* Sidan ska skriva ut samtliga produkter som finns i produktsortimentet på ett **snyggt och lättläst sätt som är automatiserat** (d.v.s. att du får inte hårdkoda in produktsortimentet utan du ska använda funktioner och framförallt loopar för att skriva ut produkterna).
* Du ska använda dig utav minst **3** egenskrivna funktioner i din inlämningsuppgift. Vad dessa funktioner gör är upp till dig men de ska vara relevanta för uppgiften och inte bara skriva ut "🤙" på sidan t.ex.
* Efter varje rad med produktinformation ska det skrivas ut en `input`-ruta av typen `number` som har ett unikt namn, där beställaren kan ange antalet produkter hen vill beställa av respektive sort.
* Om den aktuella dagen är en **måndag**, ska samtliga priser reduceras med **50%**
* Om den aktuella dagen är en **onsdag**, ska samtliga priser räknas upp, så att priset på varje produkt istället är **110%**
* Om den aktuella dagen är en **fredag**, ska samtliga priser som är **över 200 SEK minskas med 20 SEK**.
* Om det är en **jämn dag, en udda vecka och klockan är efter 13.00 men innan 17.00** så ska ett specialmeddelande visas innan beställningsformuläret där det står att varorna kan levereras redan nästa dag och att man får hela 5 % rabatt på hela beställningen.
* Formuläret ska även innehålla kontaktuppgifter: _namn, adress, telefonnummer och e-postadress_.
* Om användaren har glömt att fylla i någon av kontaktuppgifterna ska ett felmeddelande visas på nästa sida som meddelar att beställningen är ogiltig och att användaren måste göra om beställningen. Alternativt att man kommer tillbaka till samma sida med ett errormeddelande som säger att man har angivit fel information.
* När formuläret har skickats iväg till nästa sida ska det på denna sida visas hur många produkter man har beställt, vad de kostar styck och vad totalpriset för respektive produkt blir. T.ex. _"Banan - 5 kr/st - 10 st, 50 kr"_. Produkter som man inte har beställt ska inte visas.
* Totalbeloppet för hela beställningen ska framgå och visas längst ner på beställningsöversikten.

## Bedömning

* Snyggt och prydligt skriven kod. Detta innefattar konsekvent och korrekt namngivning av variabler, korrekt intabbning av koden och en logisk kodföljd. Detta omfattar såväl HTML, CSS som PHP.
* Förmåga att välja och använda rätt variabler, loopar, statements och funktioner på ett smart sätt.
* Förmåga att kommentera kod.
* Förmåga att hantera formulär, inkl. skicka och ta emot data i PHP.

## Inlämning

Du lämnar in en **`zip`**-fil som innehåller nödvändiga filer för 
examination, `PHP`-, `HTML`- och `CSS`-dokument samt tillhörande kringliggande filer om du t.ex. använder bilder.

**Inlämningen sker via zenit**

**Tid för inlämning: fredag 13/10 16.30**
