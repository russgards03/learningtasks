<?php
$php = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<?DOCTYPE html>
<html>
    <link rel= "stylesheet" href= "css/stylenav.css">
    <ul class ="navigation">
        <li><a href = "index.php?page=home"> Home </a></li>
        <li><a href = "profile.php?page=profile"> Creator's Profile </a></li>
        <li><a href = "works.php?page=works"> Creator's Works </a></li>
        <li><a href = "gallery.php?page=gallery"> Gallery </a></li>
    </ul>
