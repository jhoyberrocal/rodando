<header class="navbar-fixed">
    <nav class="jh-navbar white">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">
                    <img src="images/logo.png" alt="Rodando Express">
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                <ul class="right hide-on-med-and-down">
                    <?php include 'menu.php'?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<ul class="sidenav" id="mobile-demo">
    <li><div class="user-view">
            <div class="background">
                <img src="images/logo.png">
            </div>
        </div></li>
    <?php include 'menu.php'?>
</ul>
