<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <?php foreach ($result as $row): ?>
            <div class="card"> 
                    <img src="..." alt="..." class="img-thumbnail">
                    <div class="row">
                        <div class="col-md">
                            <?= $row['name'] ?>
                            <h5 class="card-header"><!--user --></h5>
                        </div>
                        <div class="col-md">
                            <?= $row['user_id'] ?>
                            <h5 class="card-header"><!--user_id --></h5>
                        </div>
                        <div class="col-md">
                                <?= $row['created_at'] ?>
                                <h5 class="card-header"><!--created_at --></h5>
                            </div>
                          </div>
                          <div class="card-body">
                                <?= $row['body'] ?>
                    <p class="card-text"><!--body --></p>
                    
                    <div class="row">
                        <div class="col-sm">
                            <a href="#" class="btn btn-primary btn-sm">Comments</a>
                        </div>
                        <div class="col-sm">
                            <a href="#" class="btn btn-primary btn-sm">Retweets</a>
                        </div>
                        <div class="col-sm">
                            <a href="#" class="btn btn-primary btn-sm">Likes</a>
                        </div>
                    </div>
                </div>
        </div>
        <?php endforeach ?>
</body>
</html>