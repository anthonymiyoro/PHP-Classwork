<!DOCTYPE html>
    <head>
        <title>Salamz</title>
    </head>

    <body>
        <?php
            Echo "Hello Kenya!!!!!!!";
        ?>
        <br>
        <?php 
            $date = new DateTime('now', new DateTimeZone('Africa/Nairobi'));
            Echo $date->format('Y-m-d H:i:s');
        ?>
    </body>
</html>