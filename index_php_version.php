<?php
require __DIR__ . "/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container" id="header-container">
            <div class="header-left">
                <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div id="discs-container">
                <?php foreach($database as $disc) { ?>
                <div class="disc">
                    <img src="<?php echo $disc["poster"]; ?>" />
                    <h3><?php echo $disc["title"]; ?></h3>
                    <small><?php echo $disc["author"]; ?></small>
                    <strong><?php echo $disc["year"]; ?></strong>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>