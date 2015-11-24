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
        a {
            color: inherit;
            text-decoration: none;
        }
        @media (min-width: 400px) {
            body {
                padding-top: 200px;
            }
        }
    </style>

</head>

<h1>Is PHP 7 Out Yet?</h1>

<?php if ((new \Carbon\Carbon())->gt(new \Carbon\Carbon('2015-12-03'))): ?>

    <h2>Yes!</h2>

    <h3>... probably!</h3>

<?php else: ?>

    <h2>Nope</h2>

    <small>
        <h1>When will PHP 7 be released?</h1>

        <h3><a href="http://news.php.net/php.internals/89100">Probably about <?= (new \Carbon\Carbon('2015-11-24'))->diffInDays(); ?> days</a></h3>
    </small>

<?php endif; ?>



<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69849930-1', 'auto');
    ga('send', 'pageview');
</script>

</html>
