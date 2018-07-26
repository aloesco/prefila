<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<header id="header-wrap">

    <!-- Roof area starts -->

    <!-- Roof area Ends -->

    <!-- Header area starts -->
    <section id="header">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-light navbar-fixed-top" data-spy="affix" data-offset-top="50">
            <div class="container">
                <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
                    ☰
                </button>
                <!-- Brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.JPG" alt="logo" id="logo">
                </a>
                <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
                    <!-- Navbar Starts -->
                    <ul class="nav nav-inline">
                        <a class="nav-link active" href="index.php" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-home"> INICIO</span></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-navicon"> Servicios</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="autonomos.php">Autónomos</a>
                                <a class="dropdown-item" href="empresas.php">Empresas</a>
                                <a class="dropdown-item" href="herencias.php">Herencias</a>
                            </div>
                        </li>
                        <a class="nav-link active" href="noticias.php" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-newspaper-o"> NOTICIAS</span></a>
                        <a class="nav-link active" href="contacto.php" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"> CONTACTO</span></a>
                        <!-- Search in right of nav -->
                        <li class="nav-item" class="search">
                            <form class="top_search clearfix">
                                <div class="top_search_con">
                                    <input class="s" placeholder="Search Here ..." type="text">
                                    <span class="top_search_icon"><i class="icon-magnifier"></i></span>
                                    <input class="top_search_submit" type="submit">
                                </div>
                            </form>
                        </li>
                        <!-- Search Ends -->
                    </ul>
                </div>
                <!-- Form for navbar search area -->
                <form class="full-search">
                    <div class="container">
                        <input type="text" placeholder="Type to Search">
                        <a href="#" class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                        </a>
                    </div>
                </form>
                <!-- Search form ends -->
            </div>
        </nav>
        <!-- Navbar Ends -->

    </section>
</header>
</body>
</php>