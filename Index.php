<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="nl">
<?php
    include('Scripts/Connect.php');
    ?>
<head>
		<meta charset="iso-8859-1">
		<meta name="description" content="Template">
		<meta name="keywords" content="Template">
		<meta name="author" content="Tomas van der Rijst">

		<link rel="stylesheet" href="Styles.css">

	<title>Bierapp chillin'</title>
</head>
<header>
    <h1>
        Bierapp chillin'!!
    </h1>
</header>
<body>
    <div id="bier">
        <div id="bierhead">
            <h2>
                Zuip ze!
            </h2>
        </div>
        <div id="bieraantal">
            <div id="bieraantalTop">
                <p>
                    Je hebt nog zoveel biertjes over!
                </p>
            </div>
            <div id="bieraantalBottom">
                <p>
                5
                </p>
                <p>
                Dit is niet genoeg he, koop ff wat nieuwe!
                </p>
            </div> 
                
            
        </div>
        <div id="bierknop">
            <button id="knopje" type="button" onclick="alert('Niet te dronken worden!')"><h3>Ik neem een biertje</h3></button>
        </div>
    </div>
</body>
</html>