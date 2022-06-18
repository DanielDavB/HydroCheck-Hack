<?php
if (isset($_SESSION["auth"])){
    echo(
        "<div class='container-xxl'>
            <nav class='navbar navbar-expand-xl navbar-light bg-light'>
                <div class='container-fluid'>
                    <a class='navbar-brand' href='index.php'><img src='Resources/Logo_unipoli.png' alt='' style='width: 200px;'></a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarScroll' aria-controls='navbarScroll' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                    </button>
                <div class='collapse navbar-collapse' id='navbarScroll'>
                    <ul class='navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll' style='--bs-scroll-height: 100px;'>
                        <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='pack.php'>Packages</a>
                        </li>
                        <li class='nav-item'>
                        <a class='nav-link' href='#'>Party room</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='gallery.php'>Gallery</a>
                        </li>
                    </ul>
                    <form class='d-grid gap-2 d-md-flex justify-content-md-end'>
                    </form>
                </div>

                    <div class='dropdown'>
                        <a class='btn btn-secondary' href='logout.php' >
                        <img src='resources/log.png' >
                        </a>
                    </div>
                </div>
            </nav>
        </div>"
        );
}
else{
    echo(
        "
        <div class='container-xxl'>
            <nav class='navbar navbar-expand-xl navbar-light bg-light'>
                <div class='container-fluid'>
                    <a class='navbar-brand' href='index.php'><img src='Resources/Logo_unipoli.png' alt='' style='width: 200px;'></a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarScroll' aria-controls='navbarScroll' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                    </button>
                <div class='collapse navbar-collapse' id='navbarScroll'>
                    <ul class='navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll' style='--bs-scroll-height: 100px;'>
                        <li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='pack.php'>Packages</a>
                        </li>
                        <li class='nav-item'>
                        <a class='nav-link' href='#'>Party room</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='gallery.php'>Gallery</a>
                        </li>
                    </ul>
                    <form class='d-grid gap-2 d-md-flex justify-content-md-end'>
                        <a class='btn btn-outline-success' type='log' href='login.php'>Log in</a>
                        <a class='btn btn-primary' type='sign' href='register.php'>Sign up</a>
                    </form>
                </div>
                </div>
            </nav>
        </div>
        "
        );
}


?>

