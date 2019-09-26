<?php
include 'include/dbinfo.php';
include 'include/db.php';
$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            ORDER BY updated_at DESC');
$sth->execute();


$title = "Tweet Home";

$result = $sth->fetchAll(PDO::FETCH_ASSOC);
include 'views/index_layout.php';
?>