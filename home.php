<?php
session_start();
?>
<html>
    <head>
        <title>home page</title>
    </head>
    <body>
    <h1>hello  <?php echo $_SESSION['username']; ?></h1>
    </body>
</html>