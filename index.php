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
        a{
            text-decoration: none !important;
        }
        .link-primary:hover{
            color: white !important;
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
                if($alternativePage == "homePage.php"){
                    include "particles/".$alternativePage; 
                }
                else{
                    include "practies/".$alternativePage; 
                }
            }

            if (isset($_GET['homePage'])) {
                alternativePage('homePage.php');
            }
            elseif (isset($_GET['practice_1'])) {
                alternativePage('practice_1.php');
            }
            elseif (isset($_POST['register'])) {
                alternativePage('registration_recovery.php');
            }
            else{
                alternativePage('homePage.php');
            }
        ?>
    </main>
    
    <footer></footer>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>