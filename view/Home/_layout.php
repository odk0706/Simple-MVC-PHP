<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400" rel="stylesheet">
    <style>
        body{
            font-family:"Montserrat", Verdana, sans-serif, Arial;
            font-weight:200;
            font-size:1.2em;
            background: #485563; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #485563 , #29323c); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #485563 , #29323c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding:20px;
            color:#fff;
        }
        .row{margin-top:10px; margin-bottom:20px;}
        .footer{margin-top:30px; border-top:thin solid #fff;}
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4 title">
            <h3>SimpleMVC</h3>
            <small>Current version 1.0.0</small>
        </div>
        <div class="col-sm-4 col-sm-offset-4 menu">
            <nav class="nav">
                <a class="nav-link active" href="/Home/Index">Home</a>
                <a class="nav-link" href="/Home/Features">Features</a>
                <a class="nav-link" href="/Home/Docs">Docs</a>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

            <?= /** @var $renderSubview string renders subviews */ $renderSubview ; ?>

        </div>
    </div>
</div>


<div class="footer">
    <p>A Simple PHP MVC Framework by Otto de Klerk.
        Licensed under the Apache License, 2.0 </p>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>






