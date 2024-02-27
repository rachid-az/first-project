<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <title>Document</title>
</head>

<body>
    @include('partials.header')

    @include('components.home-slider')

    @include('components.product')

    @include('components.before-footer')

    @include('components.footer')



    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function scrollTop() {
            // 500 -> This is the value in px of the distance to be scrolled for the 'scroll-to-top' button to show-up
            // $(".backToTopBtn").addClass("active");

        }
        $(function() {
            // show and hide btn
            scrollTop();
            $(window).on("scroll", scrollTop);

            // body scroll on btn click
            $(".backToTopBtn").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1);
                return false;
            });
        });
    </script>
</body>

</html>
