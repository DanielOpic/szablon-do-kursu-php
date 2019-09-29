<?php include_once('include/include.php'); ?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>Strona główna</TITLE>
        <?php include_once('elements/meta.php'); ?>
    </HEAD>
    <BODY>
        <?php include_once('elements/header.php'); ?>
        <MAIN>
            <div class="container">
                <!-- START login -->
                    <h3>Dadawanie użytkownika do CMS</h3>
                    <form class="mainForm" method="POST" action="">
                        <input type="text" name="login" placeholder="login">
                        <br>
                        <input type="text" name="fname" placeholder="imię">
                        <br>
                        <input type="password" name="pass" placeholder="hasło">
                        <br>
                        <input type="password" name="pass2" placeholder="hasło 2">
                        <br>
                        <input type="submit">                        
                    </form>
                    <a href="logowanie.php" class="link">
                        logowanie
                    </a>
                <!-- START login -->
            </div>
        </MAIN>
        <?php include_once('elements/footer.php'); ?>
    </BODY>
</HTML>