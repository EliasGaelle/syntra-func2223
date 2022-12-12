<?php require('data.php'); ?>
<html>

<body>
    <ul>
        <h1>movies</h1>
        <?php
        foreach ($movies as $key => $movie) {
            echo "<li><a href=\"detail.php?id=$key\">$movie[0]</a>($movie[1])</li>";
        }
        ?>

    </ul>
</body>

</html>