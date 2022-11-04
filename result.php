<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="js/jquery-3.6.1.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <?php
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $radioval = $_POST['radioVal'];
    $phone = $_POST['Phone'];
    $date = $_POST['datePick'];
    $messagee = $_POST['message'];
    ?>
    <center>
        <div class=" row card w-75 mt-5">
            <div class="card-header">
                <center>
                    <h4>
                        Output
                    </h4>
                </center>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Category</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <?php echo "$firstname" ?>
                            </td>
                            <td>
                                <?php echo "$lastname" ?>
                            </td>
                            <td>
                                <?php echo "$email" ?>
                            </td>
                            <td>
                                <?php echo "$radioval" ?>
                            </td>
                            <td>
                                <?php echo "$phone" ?>
                            </td>
                            <td>
                                <?php echo "$date" ?>
                            </td>
                            <td>
                                <?php echo "$messagee" ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </center>
</body>

</html>