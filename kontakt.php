<!DOCTYPE html>
<html lang="de">

<head>
    <title>Hugos Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="body1">
    <?php
    if(isset($POST["submit"])){
        mail("dvekock@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Priorität: '.$_POST["priorität"].' Nnachricht: '.$_POST["message"]);
        ?>
        <h1 class="kontaktfarbe"> Das Kontaktformular wurde abgesendet!</h1>
    }
<form action="kontakt.php" method="post">
<input type="text" name="name" placeholder="Name" require><br>
<input type="email" name="email" placeholder="email" require><br>
<select name="priorität">
    <option value="hoch">Hoch</option>
    <option value="mittel">Mittel</option>
    <option value="niedrig">Niedrig</option>
    </select>
    <textarea name="message" rows="8" cols="80" require></textarea>
    <button type="submit" name="submit">Absenden</button>
</form>    
    ?>
    <!--HEADER Bereich-->
    <header class="header help">
        <div class="Logo">
            <div class="logo__image">
                <img src="bilder/hugologo.png">
            </div>
            <div class="logo__content">
            </div>
        </div>

        <!-- NAVIGATIONS BEREICH -->

        <div class=nav>
            <a class=nav__button href="index.html">Startseite</a>
        </div>
    </header>
</body>
</html>
