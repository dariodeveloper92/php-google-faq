<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Esercizio: Google FAQs </title>
</head>

<?php 
    $faqs = [
        [
            'domanda' => '<h2>Domanda numero 1</h2>',
            'risposta1' => '<p>Risposta alla domanda n.1 <p>',
            'risposta2' => '<p>Risposta alla domanda n.2 <p>',
            'risposta3' => '<p>Risposta alla domanda n.3 <p>',
            'risposta4' => '<p>Risposta alla domanda n.4 <p>',
            'risposta5' => '<p>Risposta alla domanda n.5 <p>'
        ],
        [
            'domanda' => '<h2>Domanda numero 2</h2>',
            'risposta1' => '<p>Risposta alla domanda n.1 <p>',
            'risposta2' => '<p>Risposta alla domanda n.2 <p>',
            'risposta3' => '<p>Risposta alla domanda n.3 <p>',
            'risposta4' => '<p>Risposta alla domanda n.4 <p>'
        ],
        [
            'domanda' => '<h2>Domanda numero 3</h2>',
            'risposta1' => '<p>Risposta alla domanda n.1 <p>',
            'risposta2' => '<p>Risposta alla domanda n.2 <p>',
            'risposta3' => '<p>Risposta alla domanda n.3 <p>',
            'risposta4' => '<p>Risposta alla domanda n.4 <p>',
            'risposta5' => '<p>Risposta alla domanda n.5 <p>',
            'risposta6' => '<p>Risposta alla domanda n.6 <p>'
        ],
        [
            'domanda' => '<h3>Domanda numero 4</h3>',
            'risposta1' => '<p>Risposta alla domanda n.1 <p>',
            'risposta2' => '<p>Risposta alla domanda n.2 <p>',
            'risposta3' => '<p>Risposta alla domanda n.3 <p>'
        ],
        [
            'domanda' => '<h2>Domanda numero 5</h2>',
            'risposta1' => '<p>Risposta alla domanda n.1 <p>',
        ],
        [
            'domanda' => '<h2>Domanda numero 6</h2>',
            'risposta1' => '<p>Risposta alla domanda n.1 <p>',
        ],
    ];

    foreach($faqs as $key => $faqClass) {
        echo '<strong>' . $key . '</strong><br/>';
        foreach($faqClass as $faq) {
            echo $faq . '<br/>';
        }
    }
    
?>


<body>
    
</body>
</html>