<!DOCTYPE html>
<html>
<head>
<title>Kontakt</title>
</head>
<body>

<h1>Kontaktformular</h1>
<h2>Email</h2>
<form action="/sendmail.php" method="get">
        <label for="emailaddress">E-Mail Adresse:<br>
                <input type="text" name="emailname" required><br>
        </label>
        Betreff:<br>
        <input type="text" name="betreff" required><br>
        <label for="Nachricht">Nachricht</label><br>
        <textarea id="text" name="text" cols="50" rows="5" placeholder="Nachricht verfassen"></textarea><br>
        <br><input type="submit" value="Submit" />
</form>
</body>
</html>







