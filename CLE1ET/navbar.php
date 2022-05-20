<?php
$php = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<?DOCTYPE html>
<html>
    <link rel= "stylesheet" href= "css/stylenav.css">
    <ul class ="navigation">
        <li><a href = index.php> Home </a></li>
        <li><a href = profile.php> Creator Profile </a></li>
        <li><a href = works.php> Creator Works </a></li>
        <li><a href = gallery.php> Gallery </a></li>
    </ul>
        