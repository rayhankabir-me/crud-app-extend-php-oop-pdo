<?php

spl_autoload_register(function ($class_name) {

    include "classes/" . $class_name . ".php";
});

?>
<?php $user = new Student(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud app exptend with php oop pdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-content">
                        <div class="heading-text">
                            <h1>CRUD App Extend With PHP OOP & PDO</h1>
                        </div>

                        <div class="heading-button">
                            <a class="btn btn-primary" href="index.php">Create Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="main-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <form action="" method="POST">
                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">

                        </div>
                        <div class="mb-2">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" class="form-control" id="department">

                        </div>
                        <div class="mb-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-lg-8">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            $i = 0;

                            foreach ($user->readAll() as $key => $value) {
                                $i++;

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['department']; ?></td>
                                    <td><?php echo $value['age']; ?></td>
                                    <td><a class="btn btn-warning me-2" href="">Edit</a><a class="btn btn-danger" href="">Delete</a></td>
                                </tr>


                            <?php
                            }

                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>