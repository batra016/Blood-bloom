<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood-Bloom</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        .logo {
            height: 55px;
            width: 55px;
            border-radius: 9px;
        }

        .form-inline input {
            width: 100%;
        }

        .topbar {
            background-color: #f6f5f2;
        }

        @media (max-width: 991px) {
            .topbar {
                display: none;
            }
        }

        .topbar .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .topbar__left {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .topbar__left p {
            font-size: 12px;
            font-weight: 500;
            color: #6e7673;
            margin: 0;
        }

        .topbar__social {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-right: 30px;
        }

        .topbar__social a {
            color: #6e7673;
            font-size: 12px;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            line-height: 38px;
        }

        .topbar__social a:hover {
            color: var(--thm-primary);
        }

        .topbar__social a+a {
            margin-left: 20px;
        }

        .topbar__right {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .topbar__right>a {
            color: #6e7673;
            font-size: 12px;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 500;
        }

        .topbar__right>a+a {
            margin-left: 30px;
        }

        .topbar__right>a>i {
            font-size: 14px;
            color: var(--thm-base);
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
            margin-right: 10px;
        }

        .topbar__right>a:hover {
            color: var(--thm-base);
        }

        .topbar__right>a:hover>i {
            color: var(--thm-black);
        }
    </style>
</head>

<body>
<header>
        <div class="topbar">
            <div class="container">
                <div class="topbar__left">
                    <div class="topbar__social ">
                        <a href="facebook"> <i class="fa fa-facebook"></i></a>
                        <a href="twitter"> <i class="fa fa-twitter"></i></a>
                        <a href="linkedin"> <i class="fa fa-linkedin"></i></a>
                        <a href="instagram"> <i class="fa fa-instagram"></i></a>
                        <a href="google"> <i class="fa fa-google"></i></a>
                    </div>
                </div><!-- /.topbar__left -->
                <div class="topbar__right">
                    <a href="mailto: tustifoundation2k23"> tustifoundation2k23</a>
                    <a href="tel:+91 7417698965 ">+91 7417698965</a>
                </div><!-- /.topbar__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand " href="#"><img src="img/logo.png" class="logo" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">period dairy</a>
                    </li>
                </ul>
                <form class="form-inline ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <h1>Set Reminder</h1>
    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          <?php echo $errEmail; ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
          <?php echo $errName; ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
          <?php echo $errPass; ?>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
        </div>
      </div>
    </form>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="date">Date:</label>
        <input type="date" name="date" required><br><br>
        <input type="submit" name="submit" value="Set Reminder">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get input values
        $email = $_POST['email'];
        $date = $_POST['date'];

        // Calculate the reminder date after 25 days
        $reminder_date = date('Y-m-d', strtotime($date . ' + 25 days'));

        // Set email headers
        $to = $email;
        $subject = 'Reminder';
        $message = 'This is a reminder for your event on ' . $date . '.';
        $headers = 'From: batrayukti16@gmail.com' . "\r\n" .
            'Reply-To: batrayukti16@gmail.com ' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Check if current date is greater than reminder date, and if so, send the email
        if (strtotime($reminder_date) < strtotime(date('Y-m-d'))) {
            mail($to, $subject, $message, $headers);
            echo 'Reminder email has been sent to ' . $email . '.';
        } else {
            echo 'Reminder email will be sent on ' . $reminder_date . '.';
        }
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>