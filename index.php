<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: beige;
        }
    </style>
    <title>zuingo88 - php</title>
</head>

<body>
    <h1>ciao belli!</h1>

    <!-- <?php
            phpinfo();
            ?> -->

    <h2>
        esercizio badword:

        <?php
        $badword = $_GET['badword'];

        //echo $_GET['badword'];

        $sentence = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quae aliquam reprehenderit reiciendis inventore est voluptas aspernatur obcaecati delectus dolore accusantium dolores recusandae, alias harum suscipit sunt aut autem quia.';

        $goodSentence = str_replace($badword, '***', $sentence);
        ?>

        <p>
            <?php
            //stampo paragrafo iniziale
            echo $sentence;
            ?>
        </p>

        <p>
            <?php
            //stampo la lunghezza del paragrafo iniziale
            $length = strlen($sentence);
            echo $length;
            ?>
        </p>

        <p>
            badword = 
            <?php
            //stampo paragrafo iniziale
            echo $badword;
            ?>
        </p>

        <p>
            <?php
            //stampo stringa
            echo $goodSentence;
            ?>
        </p>
    </h2>

</body>

</html>