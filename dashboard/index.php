<?php
session_start();
include '../includes/handler.inc.php';
$session = new Session();
$session->dashboard();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Billing System</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/dashboard%201.svg"><a class="nav-link active" href="#">Dashboard</a></li>
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/server%201.svg"><a class="nav-link" href="services.html">My Services</a></li>
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/heart%20(1)%201.svg" width="20" height="43"><a class="nav-link" href="#">Tickets</a></li>
                    <li class="nav-item"><img class="nav-icon" src="../assets/img/settings%202.svg"><a class="nav-link" href="#">Account Settings</a></li>
                </ul><img class="picture" src="../assets/img/unsplash_WNoLnJo7tS8.svg">
                <div class="dropdown"><a class="dropdown-toggle grey transition" aria-expanded="false" data-bs-toggle="dropdown" href="#">John Doe</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-7">
        <div class="row">
            <div class="col-md-12">
                <p class="grey panel-p">Dashboard</p>
                <p class="grey panel-header">Welcome, John Doe</p>
                <p class="grey panel-p">Welcome to the dashboard. Through here you can manage your service.</p>
            </div>
        </div>
    </div>
    <div class="container mt-45">
        <div class="row">
            <div class="col-md-4">
                <div class="div-bg stat">
                    <h1 class="number">3</h1>
                    <p class="stat-title grey">Services</p>
                    <hr class="purple"><img class="stat-icon" src="../assets/img/server%201.svg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="div-bg stat">
                    <h1 class="number">4</h1>
                    <p class="stat-title grey">Tickets</p>
                    <hr class="red"><img class="stat-icon" src="../assets/img/heart%20(1)%201.svg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="div-bg stat">
                    <h1 class="number">1</h1>
                    <p class="stat-title grey">Invoices</p>
                    <hr class="orange"><img class="stat-icon" src="../assets/img/credit-cards%202.svg">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-45">
        <div class="row">
            <div class="col-md-6">
                <div class="div-bg">
                    <div class="dash-two">
                        <p class="second-title grey"><a href="services.html"><span class="view purple">View All</span></a>Your Services</p>
                    </div>
                    <div class="section-dash-two">
                        <div class="sec-div">
                            <p class="grey title-two">CPanel - Unlimited Package<span class="date">19/02/2022</span><br></p>
                            <p class="grey title-link purple">https://qrow.dev/<span class="status green">Active</span><br></p>
                        </div>
                        <div class="sec-div">
                            <p class="grey title-two">CPanel - 100 GB Package<span class="date">23/08/2021</span><br></p>
                            <p class="grey title-link purple">https://ethereal.host/<span class="status red">Terminated</span><br></p>
                        </div>
                        <div class="sec-div">
                            <p class="grey title-two">CPanel - Reseller<span class="date">12/06/2021</span><br></p>
                            <p class="grey title-link purple">https://cabbage.dev/<span class="status red">Terminated</span><br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="div-bg">
                    <div class="dash-two">
                        <p class="second-title grey">Your Tickets<span class="view purple">View All</span></p>
                    </div>
                    <div class="section-dash-two">
                        <div class="sec-div">
                            <p class="grey title-two">#1239 - Where is my login information?<span class="status green ticket-status">Active</span><br></p>
                            <p class="grey title-link purple">Last Updated: 19/02/2022<br></p>
                        </div>
                        <div class="sec-div">
                            <p class="grey title-two">#873 - CPanel Down<span class="status orange ticket-status">On Hold</span><br></p>
                            <p class="grey title-link purple">Last Updated: 13/12/2021<br></p>
                        </div>
                        <div class="sec-div">
                            <p class="grey title-two">#231 - Payment not working<span class="status red ticket-status">Closed</span><br></p>
                            <p class="grey title-link purple">Last Updated: 21/06/2021<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>