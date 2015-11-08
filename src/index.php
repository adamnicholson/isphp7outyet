<?php require __DIR__ . '/../vendor/autoload.php'; ?><html>
<head>
    <title>Is PHP 7 Out Yet?</title>

    <meta name="description" content="PHP 7 release date" />
    <meta name="author" content="Adam Nicholson <http://adamnicholson.co.uk>">

    <style type="text/css">
        html {
            font-family: sans-serif;
            font-size: 100px;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            font-size: 0.2em;
        }
        h2 {
            font-size: 1em;
            margin: 0;
            padding: 80px 0;
            text-transform: uppercase;;
        }
        h3 {
            font-size: 0.3em;
        }
        small {
            opacity: 0.4;
            display: block;
        }
        @media (min-width: 400px) {
            body {
                padding-top: 200px;
            }
        }
    </style>

</head>

<h1>Is PHP 7 Out Yet?</h1>

<h2>Nope</h2>

<small>
    <h1>When will PHP 7 be released?</h1>

    <h3>Probably about <?= (new \Carbon\Carbon('2015-11-15'))->diffForHumans(); ?></h3>
</small>

</html>
