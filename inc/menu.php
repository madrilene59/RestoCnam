<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Espace_membre APK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/app.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
        <div id="navbar2" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="m_index.php" class="navbar-brand" style="text-decoration:none">Accueil</a></li>
                <li><a href="m_actualites.php" class="navbar-brand" style="text-decoration:none">Actualités</a></li>
                <li><a href="m_classement.php" class="navbar-brand" style="text-decoration:none">Classement APK</a></li>
                <li><a href="#" class="navbar-brand" style="text-decoration:none">Forum</a></li>
                <li><a href="m_agenda.php" class="navbar-brand" style="text-decoration:none">Agenda</a></li>
                <li><a href="#" class="navbar-brand" style="text-decoration:none">Streaming APK</a></li>
                <li><a href="#" class="navbar-brand" style="text-decoration:none">APKdemie</a></li>
                <li><a href="#" class="navbar-brand" style="text-decoration:none">Quiz</a></li>
                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <?php if(isset($_SESSION['flash'])): ?>
        <?php foreach($_SESSION['flash'] as $type => $message): ?>
            <div class="alert alert-<?= $type; ?>">
                <?= $message; ?>
            </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>