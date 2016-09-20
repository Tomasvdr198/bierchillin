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

	<title>Inventory</title>
</head>
<header>
    <h1>
        Bierapp chillin'!!
    </h1>
</header>
<body>
    <div id="bier">
            <table style="width: 100%;" border="1">
                <tbody>
                    <tr>
                        <td>&nbsp;<b>Drankje</b></td>
                        <td>&nbsp;<b>Aantal</b></td>
                        <td>&nbsp;<b>Add Beer</b></td>
                        <td>&nbsp;<b>Remove Beer</b></td>
                    </tr>
                    <tr>
                        <td>BIER</td>
                        <td>50</td>
                        <td>&nbsp;<input type="number" id="addBeer"> <img src="Images/add.png" id="add"> </td>
                        
                    </tr>
                </tbody>
            </table>
    </div>
</body>
</html>