<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <meta name="keywords" content="portfolio, menouer, nobach, front-end, back-end, php, mysql, javascript, html, css, student, mediacollege">
    <meta name="description" content="Portfolio website voor het media college amsterdam.">
    <title>Menouer Nobach - Ajax Vierkant</title>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>
<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];

    $other = $_POST['other'];

    $email = $_POST['email'];
    $to = 'menouer002@hotmail.nl';
    $subject = 'Bericht van' . $email;
    $msg = "Naam :$firstname\n" .
        "Email: $email\n" .
        "Opmerkingen: $other\n";
    $from = $_POST['email'];

    mail($to, $subject, $msg, 'From: ' . $from);
    echo '<div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Bedankt!</strong> U bericht is ontvangen, ik neem zo spoedig mogelijk contact met u op.
  </div>';

}

?>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Menouer Nobach</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="overmij.php">Over mij</a></li>
                <li class="active"><a href="projecten.php">Projecten</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.instagram.com/menouern/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://github.com/exkungen"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.facebook.com/menouer.nobach"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/menouer-nobach-a18184152/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="title-bar">
    <div class="container">
        <h1>Ajax - Vierkant inkleuren</h1>
    </div>
</div>

<div class="projecten">
    <div class="container">

        <div class="col-sm-4" >
            <a href="http://23136.hosts.ma-cloud.nl/school/p1.3/fro/opdracht_9/index.html"><img src="img/ajax.png" class="img-thumbnail img-responsive" alt="Ajax Vierkant"></a>

        </div>
        <div class="col-sm-4">
            <h1>Ajax - Vierkant inkleuren</h1>

            <p>Doormiddel van het gebruik van AJAX, heb ik een webpagina
            gemaakt waarme je kleuren kan selecteren
            en daarmee een vierkantje kan inkleuren. Door het
            gebruik van AJAX hoeft hierdoor de pagina niet herladen te worden
            voordat je resultaat ziet.</p>
            <br>
            <p>Programmeer talen die ik heb gebruikt voor deze webpagina:</p>
            <ul>
                <li>PHP</li>
                <li>AJAX</li>
                <li>HTML</li>
                <li>JavaScript</li>
            </ul>
            <br>
            <a href="https://github.com/exkungen/ajaxfrontend"><i class="fa fa-github"></i></a>
        </div>

    </div>
</div>
<br>
<br>

<div class="section-c">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Contact</h2>
                <br />
                <p>Laat een bericht achter</p>
                <hr />
                <form method="post" id="login" action="">
                    <input type="email" class="form-control input-lg" placeholder="Email" required name="email">

                    <br />
                    <input type="text" class="form-control input-lg" placeholder="Naam" required name="firstname">
                    <br />
                    <textarea class="form-control input-lg" placeholder="Bericht" cols="20" rows="5" required name="other"></textarea>
                    <br />

                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block"/>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <p>Copyright &copy; Menouer Nobach</p>
    </div>

</footer>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script>
    window.sr = ScrollReveal();

    sr.reveal('.navbar', {
        duration: 2000,
        origin: 'bottom',
        mobile:false
    });
    sr.reveal('.section-c', {
        duration: 2000,
        origin: 'left',
        mobile:false
    });

    sr.reveal('.title-bar' , {
        duration: 2000,
        origin:top,
        mobile:false
    });

    sr.reveal('.projecten', {
        duration: 1000,
        origin: 'bottom',
        mobile:false
    });


</script>

<script>
    $(function() {
        // Smooth Scrolling
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
</body>
</html>
