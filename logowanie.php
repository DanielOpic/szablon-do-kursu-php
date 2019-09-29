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
                    <h3>Logowanie do CMS</h3>
                    <form class="mainForm" method="POST" action="">
                        <input type="text" name="login" placeholder="login">
                        <br>
                        <input type="password" name="pass" placeholder="hasło">
                        <br>
                        <input type="submit">                        
                    </form>
                    
                    <a href="rejestracja.php" class="link">
                        Rejestracja
                    </a>
                <!-- START login -->
            </div>
        </MAIN>
        <?php include_once('elements/footer.php'); ?>
    </BODY>
</HTML>