# Öva på samarbete med GIT

## Förberedelser

Vi ska nu jobba med git & GitHub enligt __Shared Repository Model__

Ni ska nu dela upp er i grupper. Grupper ska bestå av __3 personer__.
En av personerna i gruppen ska var __ägaren__ till repositoryt vi kommer att arbeta med. De andra två personerna kommer vara _Collaborators_ som ska skicka upp ändringar till originalet. Ni får själva utse rollerna.

Även fast det står att ni ska ha olika roller får ni hjälpa varandra om ni fastnar på något, det är en gruppuppgift.

* [__GitHub Help__](https://help.github.com/)
* [__git - the simple guide__](http://rogerdudler.github.io/git-guide/)
* [__Understanding the GitHub Flow__](https://guides.github.com/introduction/flow/)

## Övning - Storyteller

Repot ni skapar ska innehålla textfiler som tillsammans bildar en saga

Alla som bidrar till repot ska därmed bidra till sagan

Sagan behöver inte vara speciellt bra. Det är `git`-delen vi ska fokusera på.

Sagan ska skrivas på engelska och ska vara barnvänlig.

1. Personen som är ägare i gruppen ska skapa ett nytt repo på **GitHub** och kalla det: `storyteller-by-fornamn-efternamn-klass`

2. Ägaren klonar ner repot till datorn: `git clone`

3. Ägaren skapar sedan följande tomma filer lokalt i den klonade mappen:
    * 1_tale_begins.txt
    * 2_villain.txt
    * 3_hero_enters_tale.txt
    * 4_epic_quest.txt
    * 5_journey_through_land.txt
    * 6_great_obstacle.txt
    * 7_hero_wins.txt
    * 8_moral_of_the_tale.txt
    * 9_end.txt  

## Fyll på filerna

1. Ni som grupp ska nu fylla på filerna __1, 3, 5-9__ (**Inte 2 och 4**). Varje fil ska ha minst en mening. Här får ni hjälpas åt att skriva meningarna.

2. Ägaren lägger sedan till filerna till _Staging Area_ via `git add`, sedan gör en ny commit med `git commit` och skriver ett lämpligt commitmeddelande.

<summary></summary>

## Dela ut uppdrag

1. Se till så att samtliga deltagare är _Collaborators_ genom att gå till ditt repo sen trycka på **Settings > Collaborators** och sedan bjuda in användarna till repositoryt. Se till så att alla användare har accepterat inbjudan, det borde komma ett mail.

1. Person __A__ och __B__ i din grupp ska klona ner repot lokalt till sin egen dator (`git clone`), sedan ska de skapa var sin ny branch lokalt `git checkout -b name-of-branch`

2. __A__ och __B__ får var sin uppgift:
    1. person __A__ i din grupp ska på sin branch editera fil __2__ och ändra meningarna i den filen
    2. person __B__ i din grupp ska på sin branch editera fil __4__ och ändra meningarna i den filen.
    3. Person __A__ och __B__ ska sedan pusha upp sin branch till GitHub med `git push -u origin name-of-branch`. De som är _collaborators_ ska alltså skicka upp sina egna branches, inte `master`.
    
3. Gå in på repot på __GitHub__ och se till så att branches har pushats.


## Slå ihop alla samarbeten

[Creating a Pull Request](https://help.github.com/articles/creating-a-pull-request/)

[Using Pull Requests](https://help.github.com/articles/about-pull-requests/)

[Merging a Pull Request](https://help.github.com/articles/merging-a-pull-request/)

[Closing a Pull Request](https://help.github.com/articles/closing-a-pull-request/)


Nu har du som ägare fått en del input ifrån din grupp och det är dags att slå ihop alla branches in i din `origin/master` så du som ägare har en sammanslagen uppdaterad version av sagan.

1. Person __A__ och __B__ öppnar varsin __Pull Request__ och begär att ägaren mergar deras redigerade branches med originalet (`master`). Detta kan inte allt göras samtidigt utan man måste göra __en merge i taget__

2. Ägaren mergar alla __Pull Requests__.

När allt ovan är klart och ni har den uppdaterade sagan i `master` går ni vidare till nästa steg.


## Dags för lite konflikter

Du ska nu ge ut nya uppdrag till din grupp:

1. __A__ får i uppgift att:

  * i __fil 2__ lägga till några adjektiv i beskrivningen av skurken (beskrivande ord som ugly, evil osv)
  *  i __fil 3__ lägga till en kort beskrivning av hjältens side-kick .
  * i någon av filerna mot slutet av sagan lägga till något som denna side-kick gör för att bidra till sagan.
    
2. __B__ får i uppgift att

  * i __fil 3__ lägga till några adjektiv i beskrivningen av hjälten   
  * i __fil 2__ lägga till en kort beskrivning av skurkens husdjur 
  * i någon av filerna mot slutet av sagan lägga till något som detta husdjur gör för att bidra till sagan.

Samtidigt som __A__ och __B__ arbetar på filerna __2__ och __3__ ska du som är ägare även gå in och lägga till att både skurken och hjälpten har något sorts vapen eller föremål. D.v.s. ändra samma filer som __A__ och __B__ ändrar på samtidigt.

När allt ovan är klart går du vidare till nästa steg.

<summary></summary>

## `merge`

1. Nu har du fått en del input ifrån din grupp och det är dags att slå ihop all input till en version. Vi ska nu merga alla våra branches till `origin/master` så du har en sammanslagen uppdaterad version av sagan. (merge pull request)

2. __Whoops!__ Eftersom flera användare har ändrat på filer på samma ställe vet inte `git` vilken version som `git` ska använda, all input är likvärdig. Ska vi använda ägarens, person A eller person B version? Detta måste vi ange själva och vi kan inte gå vidare med att _merge pull request_ innan vi har löst våra konflikter.

3. Det finns olika sätt att lösa en konflikt. I många fall måste du först dra ner alla ändringar till din egen dator och göra det lokalt för att sedan pusha upp ändringar. __GitHub__ har nu dock introducerat en web editor så att du kan lösa konflikter direkt från GitHub. Se dock alltid till så att dessa ändringar blir synkade med dina lokala ändringar. Du kan öppna web editorn genom att trycka på **Resolve Conflicts** när ni mergar era branches


## Färdig?

Nu borde ni som grupp ha ett repo med en fin liten saga samtidigt som ni har lärt er att dela kod med git via GitHub. Här är några saker att tänka på för att underlätta för er själva:

* **Dra alltid ner ändringar innan du börjar arbeta med koden: `git pull`**
* **Försök undvika att jobba på samma kodrader, dela upp arbetet så att ni inte modiferar så mycket på samma ställe**
* **Kommunicera tydligt vilka delar ni jobbar på**
* **Använd en [`.gitignore`](https://git-scm.com/docs/gitignore)-fil på filer som oftast skapar problem (konflikter) eller som innehåller känslig data. Detta kan t.ex. var `.css`-filer om man använder `.sass`**


##### Läs vidare: Markdown

Det kan vara en bra idé att läsa på om Markdown också. Alla projekt på _GitHub_ har en välformatterad **README** där man kan läsa om vad projektet handlar om. Dessa **README**s är alltid i formatet **Markdown** och har filändelsen `.md` eller `.markdown`. _Markdown_ är ett format som enbart fokuserar på strukturen, hur vi formatterar vår text. _GitHub_ sköter sedan automatiskt om att konvertera detta till HTML och ge det en snygg design. Jag har skrivit den här övningen i Markdown t.ex.

**Markdown** används i stor utsträckning och är inte alls svårt att lära sig. Vill man t.ex. ha en rubrik i markdown så skriver man en hashtag framför: `# Rubrik`, vill man ha fetstilat så skriver har man två asterisk runt texten: `**fetstilat**`. En fullständig guide till att man kan göra i Markdown finns nedan:

[**Markdown Cheat Sheet**](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)
