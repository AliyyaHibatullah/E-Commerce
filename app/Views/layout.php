<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Online</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/themify-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/jquery-ui.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?= $this->include('components/header') ?>  

    <?= $this->renderSection('content') ?>

    <?= $this->include('components/footer') ?> 

    <!-- Js Plugins -->
    <script src="<?= base_url('/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.zoom.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.dd.min.js') ?>"></script>
    <script src="<?= base_url('/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('/js/main.js') ?>"></script>
	<?= $this->renderSection('script') ?>
</body>

</html>