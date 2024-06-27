<?php

$title="Music Express - Playlists";
if(session_id() == '') {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("src/static-includes.php"); ?>
</head>
<body>
<?php include('src/nav-bar.php'); ?>

<div class="container-fluid content">
    <?php
    $error = "";
    include("src/db-connect.php");

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($username)) {
        include("src/get_current_user_id.php");
        $query = "select * from playlists";
        $result = pg_query($query);
        if(!$result) {
            echo "db query error.\n";
            exit;
        }
        while($playlist = pg_fetch_row($result)) {
            include("playlist/list-playlist.php");
        }
    }
    ?>
</div>
</body>
</html>