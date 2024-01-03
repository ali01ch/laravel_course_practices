<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice 1 of laravel course</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css"> 
    <style>
        @font-face {
            font-family: "iran-sans";
            src: url(fonts/A-Iranian-Sans/IranianSans.ttf);
            font-weight: normal;
            font-style: normal;
        }

        html,body {
            padding: 0;
            position: relative;
            height: 100%;
            font-family: "iran-sans", Arial, Helvetica, sans-serif !important;
        }
    </style>

</head>
<body dir="rtl">
    <header>
        <?php
            include "particles/header.php"; 
        ?>
    </header>
    <main id="mainTag">
        <?php
            function alternativePage($alternativePage) {
                include "particles/".$alternativePage; 
            }

            if (isset($_GET['homePage'])) {
                alternativePage('homePage.php');
            }
            if (isset($_GET['practice_1'])) {
                alternativePage('practice_1.php');
            }
        ?>
    </main>
    
    <footer></footer>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>