<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/script.js" async></script>
    <script src="js/background.js" async></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Document</title>
</head>

<header class="menu">

<button><a class="a1">Aide</a></button>
<button><a class="a2">A Propos</a></button>

</header>

<body>
    <div id="envoie">
            <form action="success.php" method="post" class="formu" enctype="multipart/form-data">

                    <h1> Transfactor </h1>

                <input type="file" name="file" size="30"> <br/>
                Mon adresse Mail <input type="email" name="monEmail" size="30"><br/>
                Adresse Mail du destinataire <input type="email" name="sonEmail" size="30"><br/>
                Message <input type="textarea" name="message" size="30"><br/>
                <input type="submit" id="submit" name="envoyer" value="Envoyer" size="30"><br/>
            </form>

    </div>
</body>
</html>