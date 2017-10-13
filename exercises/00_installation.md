# Installation

Till skillnad från `html` och `css` som är statiskt innehåll så är **PHP** dynamiskt genererat. Det betyder att en `.php`-fil alltid utvärderas innan den körs. För att koden ska kunna utvärderas behöver vi en _interpreter_ (interpret - tolka). Dessutom måste denna _interpreter_ köras via en server som levererar filerna, de två vanligaste programmen för att köra igång en server är [_Apache_](https://httpd.apache.org/) & [_nginx_](https://www.nginx.com/resources/wiki/). 

Lyckligtvis behöver vi inte konfigurera och göra allt detta själv utan det finns "paket" som gör detta åt oss, d.v.s startar en lokal server:

* [**MAMP**](https://www.mamp.info/en/)
* [**WAMP**](http://www.wampserver.com/en/)
* [**XAMPP**](https://www.apachefriends.org/index.html)

Alla tre gör samma sak så det spelar inte så stor roll vilken du väljer bara den fungerar på din plattform. Alla tillåter oss att enkelt köra `.php`-filer via en webbserver lokalt på vår dator. _MAMP_ är ursprungligen skapat enbart för **Mac** men finns nu till både **Windows** och **Mac** medan _WAMP_ riktar sig enbart mot **Windows**. _XAMPP_ fungerar till både **Windows**, **Mac** och **Linux**.

### `.php`-filer

Om vi kör våra filer via en lokal server så är själva innehållet i en `.php`-fil inte så olikt en `.html`-fil, förrutom att vi kan programmera i **PHP** i en `.php`-fil. Nedan är en helt valid `.php`-fil. **Samma som med `html` så ska din startsida heta `index.php`**

```php
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
</body>
</html>
```

Varje gång vi ska **programmera** så måste vi dock skriva en `<?php ?>`-tagg. Om vi vill skriva ut något på sidan använder vi `echo`:

```php
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
        echo "MOM I'M INSIDE PHP! But also HTML 🤔";
    ?>
    
</body>
</html>
```


### Konfigurera MAMP (Mac/Windows)

1. Installera [_MAMP_](https://www.mamp.info/en/downloads/) (inte pro)
2. Starta programmet och gå till **Preferences> Web Server**. Här kan du ställa in från vilken mapp som dina filer ska serveras. Du kan även se vilken som är default inställd. Tryck på knappen som ser ut som en mapp med 3 prickar på för att ändra mapp som ska användas i Mac. Tryck på **Select** i Windows för att ändra mappen.

__På Mac__
![Web Server Root](https://i.imgur.com/ZqCSy4b.png)

__På Windows__
<p align="center"><img src="https://i.imgur.com/fYXkdvW.png" alt="Web server root" /></p>

3.  Skapa en `index.php` i mappen du valde. 
4. Starta servern genom att trycka på **Start Servers**.
5. Du kan nu besöka din server via [http://localhost:8888](http://localhost:8888). 

### Konfigurera WAMP

1. Installera [_WAMP_](http://www.wampserver.com/en/)
2. Se till så att ikonen i aktivitetsfältet är grön. Annars tryck på "Start".
3. Din `index.php` finns i **`c:\wamp\www`**. Så om du vill ändra den så gör du det i den mappen. (Den går att flytta som med MAMP men det är lättare att bara ha den i den här mappen)
4. Du kan nu besöka din server via [http://localhost](http://localhost). 

### Konfigurera XAMPP

1. Installera [_XAMPP_](https://www.apachefriends.org/download.html)
2. Starta _XAMPP_
3. Tryck på **Start** bredvid modulen **Apache**
![Start Apache](https://i.imgur.com/sCmk8T7.png)
4. Skapa eller ändra `index.php` som ligger i mappen **`c:\xampp\htdocs`**
5. Du kan nu besöka din server via [http://localhost](http://localhost).


## Konfigurera så att errormeddelanden syns

Beroende på program och operativsystem så kan errorhantering ibland vara avstängt eller "nedtystat". Så vi måste se till så att errorrapporteringen är på. Detta gör vi genom att ställa in följande egenskaper i en fil som heter `php.ini`.

Beronde på vilken version av PHP du använder och vilket program som du använder så ligger `php.ini` på lite olika ställen:

* **Windows**
    * _WAMP_ 
        * `C:\wamp64\bin\php\php7.x.x\php.ini`
    * _XAMPP_
        * `C:\xampp\php\php.ini`
    * _MAMP_
        * `C:\MAMP\conf\php7.x.x\php.ini`

* **Mac**
    * `/Applications/MAMP/conf/php7.x.x/php.ini`

**Öppna din `php.ini`-fil med valfri editor och lägg till följande rader och starta sedan om programmet efter ändringen** 
```ini
display_errors = On
error_reporting = E_ALL
display_startup_errors = On
```


