<?php include 'head.php' ?>
<body>
    <?php include 'navbar.php'?>
    <div class="container px-5">
    <?php foreach ($result as $row): ?>
        <section class="card mt-2">
        <a href="user.php?id=<?= $row['id'] ?>">
            <header class="card-header d-flex align-items-center">
            <img class="img-thumbnail" src="https://robohash.org/<?= $row['name'] ?>?set=set2" alt="pfp">
                <h5 class="card-title pl-4 mb-0">
                    <?= $row['name'] ?>
                    <small class="pl-4">
                        <?= $row['created_at'] ?>
                    </small>
                </h5>
            </header>
            <a href="tweet.php?id=<?= $row['id'] ?>">
                <div class="card-body">
                    <p class="card-text">
                        <?= $row['body'] ?>
                    </p>
                </div>
            </a>
            <footer class="card-footer d-flex ">
            <button type="button" class="btn btn-dark">Like</button>
            <button type="button" class="btn btn-dark">Comment</button>
            <button type="button" class="btn btn-dark">Retweet</button>
            </footer>
        </section>
    <?php endforeach ?>
    </div>
    <?php include 'foot.php' ?>