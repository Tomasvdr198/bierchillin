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

	<title>Manage Biertjes</title>
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
                        <td>&nbsp;<b>Naam</b></td>
                        <td>&nbsp;<b>Teken af</b></td>
                        <td>&nbsp;<b>Voeg toe</b></td>
                        <td>&nbsp;<b>Aantal biertjes</b></td>
                    </tr>
                    <tr>
                        <td>&nbsp;Tom</td>
                        <td>&nbsp;<img id="edit2" src="Images/edit.png"></td>    
                        <td>&nbsp;<input type="number" id="addBeer"> <img src="Images/add.png" id="add"> </td>
                        <td>&nbsp;</td>
                    </tr>   
                    <tr>
                        <td>&nbsp;Tomas</td>
                        <td>&nbsp;<img id="edit2" src="Images/edit.png"></td>    
                        <td>&nbsp;<input type="number" id="addBeer"> <img src="Images/add.png" id="add"></td>
                        <td>&nbsp;</td>
                    </tr>   
                    <tr>
                        <td>&nbsp;Sander</td>
                        <td>&nbsp;<img id="edit2" src="Images/edit.png"></td> 
                        <td>&nbsp;<input type="number" id="addBeer"> <img src="Images/add.png" id="add"></td>
                        <td>&nbsp;</td>
                    </tr>   
                    <tr>
                        <td>&nbsp;Lisanne</td>
                        <td>&nbsp;<img id="edit2" src="Images/edit.png"></td>  
                        <td>&nbsp;<input type="number" id="addBeer"> <img src="Images/add.png" id="add"></td>
                        <td>&nbsp;</td>
                    </tr>   
                    <tr>
                        <td>&nbsp;Tim</td>
                        <td>&nbsp;<img id="edit2" src="Images/edit.png"></td> 
                        <td>&nbsp;<input type="number" id="addBeer"> <img src="Images/add.png" id="add"></td><td>&nbsp;</td>
                    </tr>   
                </tbody>
            </table>
        
    </div>
</body>
</html>