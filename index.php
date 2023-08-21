<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'class.php';

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bilbliothèque</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://template.hasthemes.com/boighor/boighor/images/favicon.ico">
    <link rel="apple-touch-icon" href="https://template.hasthemes.com/boighor/boighor/images/icon.png">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://template.hasthemes.com/boighor/boighor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://template.hasthemes.com/boighor/boighor/css/plugins.css">
    <link rel="stylesheet" href="https://template.hasthemes.com/boighor/boighor/css/style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="https://template.hasthemes.com/boighor/boighor/css/custom.css">

    <!-- Modernizer js -->
    <script src="https://template.hasthemes.com/boighor/boighor/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

     <!-- Start Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Start header -->
        <header id="wn__header" class="oth-page header__area header__absolute sticky__header">
            <div class="container-fluid">

                <!-- Start Nav bar Laptop -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="https://template.hasthemes.com/boighor/boighor/images/logo/logo.png" alt="logo images">
                            </a>
                        </div>
                    </div>

                    <!-- Onglets nav bar -->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="index.html">Home</a></li>
                                <li class="drop"><a href="#">Shop</a></li>
                                <li class="drop"><a href="shop-grid.html">Books</a> </li>
                                <li class="drop"><a href="shop-grid.html">Kids</a></li>
                                <li class="drop"><a href="#">Pages</a></li>
                                <li class="drop"><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Icons nav bar (search, wishlist, user) -->
                    <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shop_search"><a class="search__active" href="#"></a></li>
                            <li class="wishlist"><a href="#"></a></li>
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <!-- En nav bar laptop -->

                <!-- Start Mobile Menu -->
                <div class="row d-none">
                    <div class="col-lg-12 d-none">
                        <nav class="mobilemenu__nav">
                            <ul class="meninmenu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="shop-grid.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu -->

            </div>
        </header>
        <!-- End header -->

        <!-- Start Search Popup -->
        <div class="box-search-content search_active block-bg close__top">
            <form id="search_mini_form" class="minisearch" action="#">
                <div class="field__search">
                    <input type="text" placeholder="Search entire store here...">
                    <div class="action">
                        <a href="#"><i class="zmdi zmdi-search"></i></a>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>close</span>
            </div>
        </div>
        <!-- End Search Popup -->

        <!-- Start bannière -->
        <div class="ht__breadcrumb__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__inner text-center">
                            <h2 class="breadcrumb-title">Shop Grid</h2>
                            <nav class="breadcrumb-content">
                                <a class="breadcrumb_item" href="index.html">Home</a>
                                <span class="brd-separator">/</span>
                                <span class="breadcrumb_item active">Shop Grid</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End bannière-->

        <!-- Start books page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <!-- Start Aside gauche -->
                    <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                        <div class="shop__sidebar">
                            <!-- Start catégories -->
                            <aside class="widget__categories products--cat">
                                <h3 class="widget__title">Categories</h3>
                                <ul>
                                    <li><a href="index.php">Tous <span>(<?= count($bibliotheque->livres) ?>)</span></a></li>
                                    <?php
                                    foreach ($trieGenres as $genre => $numLivres) {
                                        echo "<li><a href='index.php?genre=" . urlencode($genre) . "'>$genre <span>($numLivres)</span></a></li>";
                                    }
                                    ?>
                                </ul>
                            </aside>
                            <!-- End catégories -->

                            <!-- Start Tags -->
                            <aside class="widget__categories products--tag">
                                <h3 class="widget__title">Product Tags</h3>
                                <ul>
                                    <?php
                                    foreach ($trieGenres as $genre => $numLivres) {
                                        echo "<li><a href=\"#\">$genre</a></li>";
                                    }
                                    ?>
                                </ul>
                            </aside>
                            <!-- End tags -->
                        </div>
                    </div>
                    <!-- End aside gauche -->

                    <!-- Start main -->
                    <div class="col-lg-9 col-12 order-1 order-lg-2">
                        <!-- Start Header main (toggle, result, sort by) -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                    <!--Start Toggle -->
                                    <div class="shop__list nav justify-content-center" role="tablist">
                                        <a class="nav-item nav-link <?php if (!isset($_GET['view']) || $_GET['view'] === 'grid') echo 'active'; ?>" href="index.php?view=grid"><i class="fa fa-th"></i></a>
                                        <a class="nav-item nav-link <?php if (isset($_GET['view']) && $_GET['view'] === 'list') echo 'active'; ?>" href="index.php?view=list"><i class="fa fa-list"></i></a>
                                    </div>
                                    <!-- End Toggle -->

                                    <p>Showing 1–9 of 100 results</p>

                                    <!-- Start sort by -->
                                    <div class="orderby__wrapper">
                                        <form method="get">
                                            <span>Sort By</span>
                                            <select class="shot__byselect" name="tri" onchange="this.form.submit()">
                                                <option value="default" <?php if (isset($_GET['tri']) && $_GET['tri'] === 'default') echo 'selected'; ?>>Default</option>
                                                <option value="author" <?php if (isset($_GET['tri']) && $_GET['tri'] === 'author') echo 'selected'; ?>>Author</option>
                                                <option value="title" <?php if (isset($_GET['tri']) && $_GET['tri'] === 'title') echo 'selected'; ?>>Title</option>
                                            </select>
                                            <input type="hidden" name="action" value="sort">
                                        </form>
                                    </div>
                                    <!-- End sort by -->
                                </div>
                            </div>
                        </div>
                        <!-- End Header main (toggle, result, sort by) -->

                        <!-- Start books -->
                        <div class="tab__container tab-content">

                            <?php $modeAffichage = isset($_GET['view']) && $_GET['view'] === 'list' ? 'list' : 'grid';
                            if ($modeAffichage === 'grid') { ?>

                                <!-- Start books grid -->
                                <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                    <!-- Start Affichage -->
                                    <div class="row">
                                        <?php
                                        $livresParPage = 9;
                                        $pageActuelle = isset($_GET['page']) ? intval($_GET['page']) : 1;
                                        $indexDebut = ($pageActuelle - 1) * $livresParPage;

                                        $genreSelectionne = isset($_GET['genre']) ? $_GET['genre'] : null;

                                        $livresAffiches = 0;
                                        foreach ($bibliotheque->livres as $livre) {
                                            if (!$genreSelectionne || in_array($genreSelectionne, $livre->genres)) {
                                                if ($livresAffiches >= $indexDebut && $livresAffiches < $indexDebut + $livresParPage) {
                                                    echo <<<HTML
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                        <div class="product product__style--3">
                                                            <div class="product__thumb">
                                                                <a class="first__img" href="single-product.html">
                                                                    <img src="{$livre->coverImg}" alt="product image" style="height: 450px;">
                                                                </a>
                                                            </div>
                                                            <div class="product__content content--center">
                                                                <h4><a href="single-product.html">{$livre->title}</a></h4>
                                                                <ul class="author">
                                                                    <li>{$livre->author}</li>
                                                                </ul>
                                                                <div>
                                                                    <ul class="rating d-flex">
                                                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    HTML;
                                                }
                                                $livresAffiches++;
                                            }
                                        }
                                        ?>
                                    </div>
                                    <!-- End Affichage -->

                                    <!-- Start pagination -->
                                    <ul class="wn__pagination">
                                        <?php
                                        for ($page = 1; $page <= ceil(count($bibliotheque->livres) / $livresParPage); $page++) {
                                            $lienPaginationGrid = "index.php?page=$page";
                                            if ($genreSelectionne) {
                                                $lienPaginationGrid .= "&genre=" . urlencode($genreSelectionne);
                                            }
                                            if (isset($_GET['view']) && $_GET['view'] === 'grid') {
                                                $lienPaginationGrid .= "&view=grid"; // Ajoutez le paramètre pour l'affichage en grille
                                            }
                                            echo "<li" . ($page == $pageActuelle ? " class='active'" : "") . "><a href='$lienPaginationGrid'>$page</a></li>";
                                        }
                                        ?>
                                    </ul>
                                    <!-- End pagination -->
                                </div>
                                <!-- End books grid -->

                            <?php } else { ?>

                                <!-- Start books list -->
                                <div class="shop-list tab-pane fade <?php if (!isset($_GET['view']) || $_GET['view'] === 'list') echo 'active show'; ?>" id="nav-list" role="tabpanel">
                                    <!-- Start Affichage -->
                                    <div class="list__view__wrapper">
                                    <?php
                                        $livresParPage = 9; // Définir le nombre de livres par page
                                        $pageActuelle = isset($_GET['page']) ? intval($_GET['page']) : 1;
                                        $indexDebut = ($pageActuelle - 1) * $livresParPage;

                                        $genreSelectionne = isset($_GET['genre']) ? $_GET['genre'] : null;

                                        $livresAffiches = 0;
                                        foreach ($bibliotheque->livres as $livre) {
                                            if (!$genreSelectionne || in_array($genreSelectionne, $livre->genres)) {
                                                if ($livresAffiches >= $indexDebut && $livresAffiches < $indexDebut + $livresParPage) {
                                                    echo <<<HTML
                                                        <div class="list__view mt--40">
                                                            <div class="thumb">
                                                                <a class="first__img" href="single-product.html"><img src="{$livre->coverImg}" alt="product images"></a>
                                                            </div>
                                                            <div class="content info_livre">
                                                                <h2><a href="single-product.html">{$livre->title}</a></h2>
                                                                <ul class="author">
                                                                    <li>{$livre->author}</li>
                                                                </ul>
                                                                <ul class="rating d-flex">
                                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                                <p class="resume">{$livre->description}</p>
                                                                <a href="#" class="p_btn_favourite">add to favourite</a>
                                                            </div>
                                                        </div>
                                                    HTML;
                                                }
                                                $livresAffiches++;
                                            }
                                        } ?>
                                    </div>
                                    <!-- End Affichage -->

                                    <!-- Start Pagination -->
                                    <ul class="wn__pagination">
                                        <?php
                                        for ($page = 1; $page <= ceil(count($bibliotheque->livres) / $livresParPage); $page++) {
                                            $lienPaginationListe = "index.php?page=$page";
                                            if ($genreSelectionne) {
                                                $lienPaginationListe .= "&genre=" . urlencode($genreSelectionne);
                                            }
                                            if (isset($_GET['view']) && $_GET['view'] === 'list') {
                                                $lienPaginationListe .= "&view=list"; // Ajoutez le paramètre pour l'affichage en liste
                                            }
                                            echo "<li" . ($page == $pageActuelle ? " class='active'" : "") . "><a href='$lienPaginationListe'>$page</a></li>";
                                        }
                                        ?>
                                    </ul>
                                    <!-- End Pagination -->
                                </div>
                                <!-- End books list -->

                            <?php } ?>

                        </div>
                        <!-- End books -->
                    </div>
                    <!-- End main -->
                </div>
            </div>
        </div>
        <!-- End books Page -->

        <!-- Footer Area -->
        <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
            <div class="footer-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__widget footer__menu">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="https://template.hasthemes.com/boighor/boighor/images/logo/3.png" alt="logo">
                                    </a>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered duskam alteration variations of passages</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //Footer Area -->
    </div>
    <!-- EndMain wrapper -->

    <!-- JS Files -->
    <script src="index.js"></script>
    <script src="https://template.hasthemes.com/boighor/boighor/js/vendor/jquery.min.js"></script>
    <script src="https://template.hasthemes.com/boighor/boighor/js/popper.min.js"></script>
    <script src="https://template.hasthemes.com/boighor/boighor/js/vendor/bootstrap.min.js"></script>
    <script src="https://template.hasthemes.com/boighor/boighor/js/plugins.js"></script>
    <script src="https://template.hasthemes.com/boighor/boighor/js/active.js"></script>

</body>

</html>