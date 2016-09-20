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

	<title>Users</title>
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
			<td>&nbsp;<b>Aantal bier</b></td>
			<td>&nbsp;<b>Rang</b></td>
			<td>&nbsp;<b>Edit</b></td>
		</tr>
		<tr>
			<td>&nbsp;Tomas</td>
			<td>&nbsp;5</td>
			<td>&nbsp;Chillinner</td>
			<td>&nbsp;<img id="edit" src="Images/edit.png"></td>
		</tr>
		<tr>
			<td>&nbsp;Tim</td>
			<td>&nbsp;8</td>
			<td>&nbsp;Braumeister</td>
			<td>&nbsp;<img id="edit" src="Images/edit.png"></td>
		</tr>
		<tr>
			<td>&nbsp;Chris</td>
			<td>&nbsp;3</td>
			<td>&nbsp;Leiding</td>
			<td>&nbsp;<img id="edit" src="Images/edit.png"></td>
		</tr>
		<tr>
			<td>&nbsp;Tom</td>
			<td>&nbsp;1</td>
			<td>&nbsp;Chillinner</td>
			<td>&nbsp;<img id="edit" src="Images/edit.png"></td>
		</tr>
		<tr>
			<td>&nbsp;Sander</td>
			<td>&nbsp;4</td>
			<td>&nbsp;Leiding</td>
			<td>&nbsp;<img id="edit" src="Images/edit.png"></td>
		</tr>
	</tbody>
</table>
    <div id="addUser">
        <img id="addUserpic" src="Images/addUser.png" alt="Add user">    
    </div>
    </div>
</body>
</html>