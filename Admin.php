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

	<title>Admin chillin'</title>
</head>
<header>
    <h1>
        Admin chillin'!!
    </h1>
</header>
<body>
    <div id="bier">
    <h2>
        Welkom admins!
    </h2>
    <p>
        Dit is een menu die alleen jullie kunnen zien, ook de pagina's waarop je kan komen zijn niet zichtbaar voor andere. <br/>
        Dus, gebruik je account met caution, with great power comes great responsibility
    </p>



<div class="menu_simple" height="100%;">
<ul>
<li><a href="Index.php">Bierapp</a></li>
<li><a href="Users.php">Gebruikers</a></li>
<li><a href="ManageBeer.php">Beheer Bier</a></li>
<li><a href="Inventory.php">Inventaris</a></li>

</ul>
</div>



            
        </div>
       
</body>
</html>