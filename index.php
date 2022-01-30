<?php 

require_once __CLASS__ . "./classes/moevies.php";

$films = [
    new Netflix("Rocky", "119m", "John G. Avildsen", 1976, "drammatico, sportivo, sentimentale", "USA", "Rocky è un giovane scapestrato, scagnozzo di un boss mafioso ma col il sogno di diventare un pugile, ci riuscirà attraverso l'uso della parabola pugni e vittorie, simbolo della lotta non solo sul ring ma anche al di fuori."),
    new Netflix("Rambo", "93m", "Ted Kotcheff", 1982, "azione, avventura, drammatico", "USA", "Il personaggio di John Rambo creato da Morrell è un ex berretto verde, reduce dalla guerra del Vietnam, che, tornato in patria, viene schernito e umiliato dai suoi compatrioti e alla fine emarginato, tradito, braccato e costretto a combattere e uccidere per sopravvivere."),
    new Netflix("Inception", "148m", "Christopher Nolan", 2010, "azione, fantascienza, thriller, avventura", "USA, UK", "Dom Cobb è un abilissimo ladro, il migliore al mondo quando si tratta della pericolosa arte dell'estrazione: ovvero il furto di preziosi segreti dal profondo del subconscio mentre si sogna, quando la mente è al massimo della sua vulnerabilità."),
    new Netflix("Limitless", "105m", "Neil Burger", 2011, "fantascienza, thriller", "USA", "Limitless è un film del 2011 diretto da Neil Burger. Il soggetto si basa sul romanzo Territori oscuri (The Dark Fields) del 2001 di Alan Glynn, e tratta dell'effetto sconvolgente che ha una misteriosa e potentissima droga in grado di aumentare la potenza del proprio cervello sulla vita di un uomo.")
];

$series = [
    new Netflix("Breaking Bad", "45-60 min (episodio)", "Vince Gilligan", "2008-2013", "drammatico, noir, thriller, azione", "USA", "Quando, il giorno dopo il suo cinquantesimo compleanno, a Walter viene diagnosticato un cancro ai polmoni, i suoi problemi sembrano precipitare, anche perché non dispone della necessaria copertura assicurativa per curarsi. Tuttavia, in seguito al casuale incontro con Jesse Pinkman, un suo ex studente diventato uno spacciatore di poco conto, Walter decide di cominciare a cucinare insieme a lui cristalli di metanfetamina."),
    new Netflix("Lost", "44 min (episodio)", "J. J. Abrams", "2004-2010", "avventura, drammatico, thriller, fantascienza", "USA", "Un aereo in volo da Sydney a Los Angeles, precipita su un'isola apparentemente disabitata. I 48 sopravvissuti si accampano sulla spiaggia e si organizzano per resistere fino all'arrivo dei soccorsi, che però tardano ad arrivare. Ma, ben presto, scoprono che il loro aereo è uscito dalla rotta prevista di circa mille miglia e che l'isola è teatro di una serie di eventi apparentemente inspiegabili."),
    new Netflix("The Boys", "54-68 min (episodio)", "Frederick E.O. Toye", 2019, "supereroi, thriller, commedia nera, drammatico, azione", "USA", "Al giorno d'oggi i supereroi vivono al centro dell'attenzione e sono gestiti come star del cinema dalla potentissima multinazionale Vought American, il cui scopo primario è mascherare i vizi dei propri affiliati per ritrarli come i paladini di cui il mondo ha bisogno in modo da trarne il massimo profitto inserendoli, oltre che in vere missioni di salvataggio, in qualsiasi operazione di marketing che possa fruttare miliardi di dollari."),
    new Netflix("Incastrati", "26-35 min (episodio)", "Salvatore Ficarra, Valentino Picone", 2022, "commedia, thriller, giallo", "Ita", "Ambientata a Palermo, la storia segue le (dis)avventure di Salvo e Valentino. I due sono amici d’infanzia, colleghi (sono tecnici della televisione) e sono anche cognati, poiché Salvo è sposato con la sorella di Valentino, Ester. Un giorno i due uomini rimangono coinvolti in un omicidio. Cercando di scappare dalla scena del crimine, i due si mettono sempre più nei guai in un crescendo di eventi che li porterà addirittura a dover fare i conti con la mafia.")
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM</title>
</head>
<body>
    

    <h1>Prodotti Netflix:</h1>

    <!-- inizio sezione film -->
    <?php foreach($films as $film) { ?>
    
        <div>
            <?php echo $film->info(); ?>
            <ul>
                <li><strong>Regista:</strong> <?php echo $film->regista ?></li>
                <li><strong>Durata:</strong> <?php echo $film->durata ?></li>
                <li><strong>Anno:</strong> <?php echo $film->anno ?></li>
                <li><strong>Genere:</strong> <?php echo $film->genere ?></li>
                <li><strong>Nazione:</strong> <?php echo $film->nazione ?></li>
            </ul>
        </div>

    <?php } ?>
    <!-- / sezione film -->

    <hr>

    <!-- inizio sezione serie TV -->
    <?php foreach($series as $serie) { ?>
    
        <div>
            <?php echo $serie->info(); ?>
            <ul>
                <li><strong>Regista:</strong> <?php echo $film->regista ?></li>
                <li><strong>Durata:</strong> <?php echo $film->durata ?></li>
                <li><strong>Anno:</strong> <?php echo $film->anno ?></li>
                <li><strong>Genere:</strong> <?php echo $film->genere ?></li>
                <li><strong>Nazione:</strong> <?php echo $film->nazione ?></li>
            </ul>
        </div>

    <?php } ?>
    <!-- / sezione serie TV -->


</body>
</html>