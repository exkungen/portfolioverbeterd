
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <meta name="keywords" content="menouer, nobach, student, media, college, amsterdam">
    <meta name="description" content="Portfolio website voor het media college amsterdam.">
    <title>Menouer Nobach - Home</title>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <a class="navbar-brand" href="#">Menouer Nobach</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="overmij.php">Over mij</a></li>
                <li><a href="projecten.php">Projecten</a></li>
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

<div class="showcase">
    <div class="container">
        <h1>Welkom!</h1>
        <p class="lead">Ik ben Menouer Nobach een student van het Media College Amsterdam.</p>
        <a href="overmij.php" class="btn btn-primary">Lees meer</a>
</div>
</div>

<div class="section-a">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-eye"></i>
                <h3>Feedback</h3>
                <p>Ik sta altijd open voor feedback; ik ben een makkelijk aanspreekbaar persoon die het zeer op prijs stelt als mensen hun meningen laten weten over mijn projecten.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-gear"></i>
                <h3>Functioneel</h3>
                <p>Een bruikbaar en goed eindproduct is uiterst belangrijk in de programmeerwereld, daarom streef ik altijd naar een top resultaat waar de klant en ik zelf tevreden mee zijn.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-lightbulb-o"></i>
                <h3>Creatief</h3>
                <p>Ik probeer altijd iets unieks te verzinnen als ik een website bouw of wanneer ik iets aan het programmeren ben. Ook denk ik altijd oplossinggericht en pak problemen bij de bron aan.</p>
            </div>
        </div>
    </div>
</div>



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
sr.reveal('.showcase', {
    duration: 2000,
    origin: 'right',
    mobile:false
});
sr.reveal('.navbar', {
    duration: 2000,
    origin: 'bottom',
    mobile:false
});
sr.reveal('.section-a', {
    duration: 2000,
    origin:'right',
    distance:'300px',
    mobile:false
});
sr.reveal('.section-b', {
    duration: 2000,
    origin: 'bottom',
    mobile:false
});
sr.reveal('.row', {
    duration: 2000,
    origin: 'left',
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
