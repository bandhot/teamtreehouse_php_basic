
<?php

date_default_timezone_set('Asia/Jakarta');
$name = "sudiyono";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>team treehouse<?php echo $name; ?></title>
</head>
<body>
    <div class="cotainer_fluid">
        <div class="row">
                    <div class="sidebar col-lg-3 border">
                        <div class="d-flex flex-coloumn mt-5">
                            <img class="d-flex justyfy-content-cnter" src="asset/image/boon.jpg" alt="boon">
                        </div>
                        <div class="d-flex flex-coloumn mt-5">
                            <div class="d-flex algin-self-center">
                                <p class="h2 text-light"><?php echo $name; ?></p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="content col-lg-9 vh-100">
                        <div class="d-flex flex-coloumn border">
                            <p class="h2 pt-4 pl-5" >My first page PHP</p>
                            
                            <section class="pl-5">
                                    <p class="h2">unit</p>
                                    <?php include "inc/units.php"; ?>
                                    <p class="lead"><?php echo celciustofarenheit(80); ?></p>
                            </section>

                            <section class="pl-5">
                                    <p class="h2">strings</p>
                                    <?php include "inc/strings.php"; ?>
                                    <p class="lead"><?php echo askName("ahmad dani"); ?></p>
                            </section>
                        </div>
                        <div class="d-flex flex-coloumn">
                            
                        </div>
                        <div class="d-flex  flex-column posistion-absolute fixed-bottom">
                            <p class="mx-auto d-block">&copy; <?php echo $name; echo "last modified: ". date("d/F/Y H:i:s".getlastmod()); ?></p>
                        </div>
                    </div>
        </div>
    </div>
    
<script src="asset/js/jquery-3.5.1.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>