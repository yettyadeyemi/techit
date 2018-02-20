<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

        <?php
        error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

        $servername = "eu-cdbr-west-02.cleardb.net";
        $username = "b9b1e39f450202";
        $password = "84133783";
        $dbname = "heroku_1171fdf694dbc66";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if (isset ($_POST['submit'])) {
            $email = $_POST['email'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $company = $_POST['company'];
            $choice = $_POST['choice'];
            $sql = "INSERT INTO `users` (email, fname, lname, company, choice) VALUES ('$email','$fname','$lname','$company','$choice')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-info">Successful! We will get back to you shortly </div>';
            } else {
                echo "<script>alert('Error while saving your data')</script>";
            }
        }
        ?>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">

            <div class="col-md-12 register">
                <form method="post" action="register.php">
                    <h4>Hire a Professional</h4>
                    <div class="input-group input-group-lg wow fadeInUp">
                        <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-user"
                                                                               aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="fname" aria-describedby="sizing-addon-1"
                               placeholder="First name" aria-required="required">
                    </div>
                    <p></p>
                    <div class="input-group input-group-lg wow fadeInUp">
                        <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-user"
                                                                               aria-hidden="true"></i> </span>
                        <input type="text" class="form-control" name="lname" aria-describedby="sizing-addon-1"
                               placeholder="Last name" required>
                    </div>
                    <p></p>

                    <div class="input-group input-group-lg wow fadeInUp">
                        <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-university"
                                                                               aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="company" aria-describedby="sizing-addon-1"
                               placeholder="Company" aria-required="required">
                    </div>
                    <p></p>
                    <div class="input-group input-group-lg wow fadeInUp">
                        <span class="input-group-addon" id="sizing-addon-1"><i class="fa fa-envelope"
                                                                               aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name="email" aria-describedby="sizing-addon-1"
                               placeholder="Work email address" required>
                    </div>
                    <p></p>
                    <div class="input-group input-group-lg wow fadeInUp">
                        <span class="input-group-addon" id="sizing-addon-1">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" name="choice" aria-describedby="sizing-addon-1"
                               placeholder="Software developer/Data Analyst" aria-required="required">
                    </div>
                    <p></p>
                    <input type="submit" name="submit" id="submit" value="HIRE NOW" class="btn btn-info">

                </form>
                <a href="index.php">
                    <input type="submit" name="submit" id="submit" value="<< Back" class="btn btn-info">
                </a>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script1.js"></script>
    </body>
</html>
