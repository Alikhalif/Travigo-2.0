<?php include(VIEWS.'include'.DS.'header.php'); 

if(isset($_POST['id'])){

    $prodObj = new ProductController();
    $product = $prodObj->getProductC();
}
if(isset($_POST['btnEdit'])){

    $prodObj = new ProductController();
    $products = $prodObj->getProductC();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>  
    <h1 class="text-center my-5 py-3"> Update Travel</h1>

    <div class="container">
        <div class="row">
            <div class="col">
            
                <form action="<?= BURL ?>/Product/updatePage" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ville</label>
                        <input type="text" class="form-control" name="ville" value="<?php echo $products['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $products['Price']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $products['dateD']; ?>">
                    </div>

                    <button class="btn btn-primary" type="submit" name="btnEdit">Update</button>
                </form>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>