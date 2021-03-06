<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Esercizio: Google FAQs </title>

    <style>
        /* Header ------------------------------*/
        header {
            width: 100%;
            height: 10vh;
            /* background-color: greenyellow; */
            border-bottom: 1px solid lightgrey;
        }

        #header_top {
            width: 100%;
            height: 50%;
        }

        #header_bottom {
            width: 50%;
        }

        .container_top {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* margin: 0 10px; */
        }

        .title_header {
            color: #5F6368;
        }

        .blueButton {
            width: 100px;
            height: 35px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            border: 3px solid blue;
            cursor: pointer;
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
        .nav_item {
            list-style: none;
        }

        .nav_link {
            text-decoration: none;
            color: #5F6368;
        }

        /* Hover */
        nav a:hover {
            border-bottom: 3px solid blue;
            color: blue;
        }

        /* Main ------------------------------*/
        main {
            width: 100%;
            height: 100%;
            display: flex; 
            justify-content: center;
        }

        #container_main {
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .container_faq {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<?php 
    $faqs = [
        [
            'domanda' => '<h2>Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio? </h2>',
            'risposta1' => '<p>La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non pi?? rilevanti, o eccessivi. </p>',
            'risposta2' => '<p>Da quando questa decisione ?? stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perch?? dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni. </p>',
            'risposta3' => '<p>Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodich?? valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perch?? abbiamo gi?? ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi ?? un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorit?? garante per la protezione dei dati personali nel tuo paese. </p>',
            'risposta4' => '<p>Nei prossimi mesi lavoreremo a stretto contatto con le autorit?? per la protezione dei dati e con altre autorit?? per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge. </p>',
            'risposta5' => '<p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione. </p>'
        ],
        [
            'domanda' => '<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro? </h2>',
            'risposta1' => '<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi ?? imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno. </p>',
            'risposta2' => '<p>Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora pi?? efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Cos??, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo. </p>',
            'risposta3' => '<p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online. </p>',
            'risposta4' => '<p>Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo. </p>'
        ],
        [
            'domanda' => '<h2>Perch?? il mio account ?? associato a un paese? </h2>',
            'risposta1' => '<p>Il tuo account ?? associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose: </p>',
            'risposta2' => '<ol><li>La societ?? consociata Google che offre i servizi, tratta le tue informazioni ed ?? responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due societ?? seguenti: </li></ol>',
            'risposta3' => '<ol  type="a"><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera. </li>',
            'risposta4' => '<li>Google LLC, con sede negli Stati Uniti, per il resto del mondo. </li></ol>',
            'risposta5' => '<ol start="2"><li>La versione dei termini che regola il nostro rapporto, che pu?? variare in base alle leggi locali. </li></ol>',
            'risposta6' => '<p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla societ?? consociata che li offre o dal paese a cui ?? associato il tuo account. </p>'
        ],
        [
            'domanda' => '<h3>Stabilire il paese associato al tuo account </h3>',
            'risposta1' => '<p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove ?? stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso pi?? tempo nell\'ultimo anno. </p>',
            'risposta2' => '<p>I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l\'associazione del paese. </p>',
            'risposta3' => '<p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l\'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato. </p>'
        ],
        [
            'domanda' => '<h2>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google? </h2>',
            'risposta1' => '<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avr?? rilevato l\'aggiornamento, le informazioni non verranno pi?? visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, ?? inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni. </p>',
        ],
        [
            'domanda' => '<h2>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web? </h2>',
            'risposta1' => '<p>In alcuni casi s??. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento pu?? fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio. </p>',
        ],
    ];

    
    
?>


<body>
    <header>
        <div id="header_top">
            <div class="container_top">
                <h2 class="title_header"> Google Privacy e termini</h2>
                <button class="blueButton"> Accedi </button>
            </div>
        </div>
        <div id="header_bottom">
            <nav>
                <ul class="navbar">
                    <li class="nav_item">
                        <a class="nav_link" href="#"> Introduzione </a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="#"> Norme sulla privacy </a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="#"> Termini di servizio </a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="#"> Tecnologie </a>
                    </li>
                    <li class="nav_item">
                        <a class="nav_link" href="#"> Domande frequenti </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div id="container_main">
            <div class="container_faq">
                <?php 
                    foreach($faqs as $key => $faqClass) {
                        //echo '<strong>' . $key . '</strong><br/>';
                        foreach($faqClass as $faq) {
                            echo $faq . '<br/>';
                        }
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>