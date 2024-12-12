<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            
        </div>
        <?php

        include("Config.php");

        $c1 = new Config();

        if (isset($_REQUEST['submit'])) {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];

            $c1->insertDatabase($name, $email, $phone);
        }

        ?>

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Add New Student</h3>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Student Name</label>
                                <input id="name" class="form-control" name="name" type="text" placeholder="Student name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" name="email" type="text" placeholder="Email Id"
                                     >
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phoen</label>
                                <input id="phone" class="form-control" name="phone" type="number"
                                    placeholder="Phone Number" required>
                            </div>

                            <div class="row">
                                <div class="col text-center">
                                    <button name="submit" class="btn btn-primary">Submit</button>
                                    <button name="show" onclick="location.href='Data.php'" class="btn btn-secondary">Show Data</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>