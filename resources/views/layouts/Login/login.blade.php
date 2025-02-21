<!DOCTYPE html>
<html lang="en">

<head>

    <title>LC360 - Login Page</title>


    <link rel="stylesheet" href="/libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/core.css">
    <link rel="stylesheet" href="/assets/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right,rgb(91, 86, 97),rgb(167, 173, 183));
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body class="simple-page">
    <div id="back-to-home">
        <a href="/" class="btn btn-outline btn-default">Home</a>
    </div>
    <div class="simple-page-wrap">
        <div class="simple-page-logo animated swing">

            <span style="color: white">Life Care 360</span>

        </div>            <!--logo--> 

        @yield('content')

        <div class="simple-page-footer">
            @yield('footer')

        </div>          <!--.simple-page-footer-->  


    </div>               <!--.simple-page-wrap--> 
</body>

</html>


