<?php

require_once __DIR__ . "/lib/article.php";
require_once __DIR__ . "/templates/header.php";


?>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="Logo Trendz" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="actualites.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir toutes les actualités</a>
            </div>
        </div>
    </div>
</div>
<div class="row text-center">
    <?php foreach ($articles as $key => $article) {
        require __DIR__ . "/templates/article_part.php";
    } ?>
</div>

<?php require_once __DIR__ . "/templates/footer.php"; ?>