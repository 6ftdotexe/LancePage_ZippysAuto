<?php
// Check if session has been started, if not start session
session_status() === PHP_SESSION_ACTIVE ? '' : session_start();
if (isset($_SESSION['firstname'])) {
    // Set variable to cookie name
    $firstname = $_SESSION['firstname'];
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Zippy Used Auto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./view/static/css/style.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1691b24dfc.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/zippyusedauto">Zippy Used Auto</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/zippyusedauto/auth/login.php">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/zippyusedauto/auth/register.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>