<section class="card mt-2">
    <a href="user.php?id=<?= $result['id'] ?>">
            <header class="card-header d-flex align-items-center">
                    <img class="img-thumbnail" src="https://robohash.org/<?= $result['name'] ?>?set=set2" alt="pfp">
                <h5 class="card-title pl-4 mb-0">
                    <?= $result['name'] ?>
                    <small class="pl-4">
                        <?= $result['created_at'] ?>
                    </small>
                </h5>
            </header>
            <a href="index.php">
                <div class="card-body">
                    <p class="card-text">
                        <?= $result['body'] ?>
                    </p>
                </div>
            </a>
            <footer class="card-footer d-flex">
            <button type="button" class="btn btn-dark">Like</button>
            <button type="button" class="btn btn-dark">Comment</button>
            <button type="button" class="btn btn-dark">Retweet</button>
            </footer>
        </section>