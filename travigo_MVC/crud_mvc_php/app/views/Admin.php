<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <style>
        :root{
            --main-bg-color: #009d63;
            --main-text-color: #009d63;
            --second-text-color: #bbbec5;
            --second-bg-color: #c1efde;
        }

        .primary-text{
            color: var(--main-text-color);
        }

        .second-text{
            color: var(--second-text-color);
        }

        .primary-bg{
            background-color: var(--main-bg-color);
        }
        .secondary-bg{
            background-color: var(--second-bg-color);
        }

        .rounded-full{
            border-radius : 100%;
        }

        #wrapper{
            overflow-x:hidden;
            background-image: yellow;
        }




    </style> -->
  </head>
  <body>

    <!-- <div class="d-flex" id="wrapper">
        <div class="bg-white">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
                <i class="fas fa-user-secret me-2"></i> Admin Pro
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tachometer-alt me-2"></i> Travels
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tachometer-alt me-2"></i> Add travel
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-project-diagram me-2"></i> logout
                </a>
                
            </div>
        </div>

        

        <div class="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item-dropdown">
                            <a href="" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Ali Parker
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="#" class="dropdown-item">Profile</a></li>
                                <li><a href="#" class="dropdown-item">Settings</a></li>
                                <li><a href="#" class="dropdown-item">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <h3>Content here</h3>
            </div>
        </div>

    </div> -->

    <?php include(VIEWS.'include'.DS.'header.php'); ?>

    <h1 class="text-center my-5 py-3">View All Travels</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">price</th>
                    <th scope="col">date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // $objT = new ProductController();
                        // $data = $objT->getAll();

                        foreach($products as $prod){
                    ?>
                    <tr>
                        <th scope="row"><?= $prod['id'] ?></th>
                        <td><?= $prod['title'] ?></td>
                        <td><?= $prod['Price'] ?>$</td>
                        <td><?= $prod['dateD'] ?></td>
                        <td><a href="<?php echo 'getProductC/'.$prod['id'] ?>" name="edit" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Edit</a></td>
                        <td>
                            <a href="<?php echo 'deleteC/'.$prod['id'] ?>" name="delet" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Delete</a>
                        </td>
                    </tr>

                    <?php } ?>
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>