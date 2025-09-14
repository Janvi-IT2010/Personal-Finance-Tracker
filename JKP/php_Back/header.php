<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PFT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="fas fa-home"></i>Home
                            <!-- <span class="visually-hidden">(current)</span> -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transction.php"><i class="fas fa-money-check-alt"></i> Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="summary.php"><i class="fas fa-chart-pie"></i> Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="budgeting.php"><i class="fas fa-wallet"></i> Budget</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="savings.php"><i class="fas fa-piggy-bank"></i>Savings</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form> -->
                <form class="d-flex" action="../db_settings/logout.php" method="post">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fas fa-sign-out-alt"></i>Logout</button>
                </form>


            </div>
        </div>
    </nav>