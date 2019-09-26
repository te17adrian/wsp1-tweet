  
<?php

$userId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include 'include/dbinfo.php';
include 'include/db.php';
$sth = $dbh->prepare('SELECT * FROM users
            WHERE id =' . $userId);
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);

$title = "Profile for " . $result['name'];

include 'views/user_layout.php';

?>