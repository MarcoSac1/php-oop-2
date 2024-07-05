<?php require_once __DIR__. '/db/db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="py-4 my-2 container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Boolshop</h1>
        </div>
    </div>
    </header>
    <main class="container">
        <div class="row">
            <?php foreach($products as $Product) {?>
                <article class="col-4 mb-2">
                    <div class="card mb-4 h-100">
                        <div class="card-body">
                            <div class="card-image">
                                <img class="img-fluid" src=" <?php echo $Product -> getImageUrl() ?>" alt="image">
                            </div>
                            <h5 class="card-title">
                                <?php echo $Product -> getName() ?>
                            </h5>
                            <p class="card-text">della <?php echo $Product -> getBrand() ?></p>
                            <p class="card-text">prezzo: <?php echo $Product -> getPrice() ?> <?php echo $Product -> getIsAvailable() ?'disponibile' : 'non disponibile' ?> </p>
                            <p class="card-text">categoria: <?php echo $Product -> getCategory()->getName() ?></p>
                        </div>
                    </div>
                </article>
            <?php }?>
        </div>
    </main>
</body>
</html>