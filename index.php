<?php require __DIR__ . "/Movie.php"; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css">
        <title>Prima OOP</title>
    </head>
    <body>
        <header class="container text-center my-3">
            <h1>Lista FILM</h1>
        </header>

        <main>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="movie text-center m-3">
                        <div>
                            <img src="<?= $movie1->poster;?>" alt="<?= $movie1->title;?>">
                        </div>
                        <h2 class="my-3"><?= $movie1->title ; ?></h2>
                        <p><?= $movie1->getPlot() ; ?></p>
                        <small><strong>Cast:</strong></small>
                        <?php foreach($movie1->castArray as $actor) { ;?>
                            <small>
                                <?= $actor;?>
                            </small>
                        <?php }; ?>
                        <br>
                        <small><?php echo $movie1->getVote();?></small>                          
                    </div>


                    <div class="movie text-center m-3">
                        <div>
                            <img src="<?= $movie2->poster;?>" alt="<?= $movie1->title;?>">
                        </div>
                        <h2 class="my-3"><?= $movie2->title ; ?></h2>
                        <p class="text-center"><?= $movie2->getPlot() ; ?></p>
                        <small><strong>Cast:</strong></small>
                        <?php foreach($movie2->castArray as $actor) { ;?>
                            <small>
                                <?= $actor;?>
                            </small>
                        <?php }; ?>
                        <br>  
                        <small><?php echo $movie2->getVote();?></small>
                    </div>
                </div>
            </div>
        </main>
        
    </body>
</html>