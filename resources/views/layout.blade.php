<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from rudhisasmito.com/demo/petro/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 05:57:23 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSIT360</title>
    <meta name="description" content="Petro - Industrial HTML Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="petro, industrial, oil and gas, company, manufacturing, mechanical, power and energy, engineering">
    <meta name="author" content="rudhisasmito.com">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- ==============================================
    CSS VENDOR
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>

</head>

<body>

<!-- Load page -->
<div class="animationload">
    <div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

@include('partials.header')

@yield('content')

{{--@include('partials.footer')--}}

@include('scripts')

@yield('js_script')

</body>

<!-- Mirrored from rudhisasmito.com/demo/petro/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 06:00:31 GMT -->
</html>