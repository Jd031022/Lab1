<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            color: black;
            padding: 15px;
            text-align: center;
        }

        header img {
            width: 100px; 
            display: block;
            margin: 0 auto 10px auto;
        }

        nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        nav a {
            position: relative;
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px;
        }

        nav a:hover::before,
        nav a.active::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: #333;
            transform: scaleX(1);
            transition: transform 0.3s ease;
            transform-origin: center;
        }

        nav a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: #333;
            transform: scaleX(0);
            transition: transform 0.3s ease;
            transform-origin: center;
        }

        #background {
            position: absolute;
            left: -5rem;
            top: 0;
            max-width: 877px;
            width: calc(100% + 10rem);
            height: auto;
        }

        .container {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content {
            text-align: left;
            padding: 20px;
        }
        
        .white-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }
        
    </style>
</head>
<body class="font-sans antialiased dark-mode">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute" src="https://laravel.com/assets/img/welcome/background.svg" alt="Background Image">
        <div class="container">
            <header>
                <!-- Laravel Logo -->
                <a href="/">
                    <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo">
                </a>
                <h1>Welcome to Juliane's Laravel Project</h1>
            </header>
            <nav>
                <a href="/home">Home</a>
                <a href="/about">About</a>
                <a href="/content">Content</a>
            </nav>
            <div class="content">
                <div class="white-container">
                    <div class="row" id="content">
                        <div class="col-md-6">
                            <h2>Nam Imperdiet Aliquam</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed mauris eu ligula convallis fringilla. Morbi at tincidunt justo, non vestibulum nisi. Quisque dictum mi ut ullamcorper iaculis. Donec in mi ut nulla consectetur dictum. In elementum a urna quis feugiat. Quisque a porttitor metus. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
                        </div>
                        <div class="col-md-6">
                            <h2>Aliquam Erat Volutpat</h2>
                            <p>This is free responsive HTML5 template that can be viewed in any mobile device. Vivamus adipiscing, lorem a rhoncus adipiscing, dolor massa hendrerit sem, suscipit fermentum justo dolor at sapien. Sed volutpat libero lectus, nec pulvinar tellus dictum eu. Praesent luctus feugiat mattis. Pellentesque ut diam vehicula.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Morbi Quis</h3>
                            <p>Maecenas adipiscing semper sapien at pretium. Aenean tortor leo, venenatis vitae pretium sit amet, blandit porta diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>Integer ac Urna</h3>
                            <p><a href="#">Maecenas adipiscing</a> semper sapien at pretium. Aenean tortor leo, venenatis vitae pretium sit amet, blandit porta diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>Neque Vel Auctor</h3>
                            <p>Donec ipsum diam, fermentum eu scelerisque quis, vestibulum sit amet orci. Cras in commodo libero. Duis ut urna sit amet est feugiat ultrices id eget metus. Nulla et eros tellus, a hendrerit nulla. Maecenas adipiscing semper.</p>
                        </div>
                        <div class="col-md-3">
                            <h3>Maecenas Id </h3>
                            <p>Pellentesque ac magna quis sem aliquam viverra id sit amet justo. Nunc egestas sodales eros, et tristique sapien laoreet sit amet. Sed quis rutrum ipsum. Suspendisse ullamcorper augue sit amet arcu malesuada.</p>
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Imerdiet Aliquam</h3>
                            <p>Quisque a porttitor metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus pulvinar ligula in lorem gravida, vel congue leo sodales. Quisque bibendum iaculis libero et porttitor.</p>
                        </div>
                        <div class="col-md-9">
                            <h3>Nam Imperdiet Aliquam</h3>
                            <p>Maecenas adipiscing semper sapien at pretium. Aenean tortor leo, venenatis vitae pretium sit amet, blandit porta diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi semper mauris vel erat suscipit venenatis. Nullam rhoncus porta tortor ut semper. Etiam elit dolor, vehicula eu sodales ac, lacinia sed mauris. Vestibulum convallis est nulla, lacinia dictum nisi porttitor at.</p>
                            <p>Donec ipsum diam, <a href="#">fermentum eu</a> scelerisque quis, vestibulum sit amet orci. Cras in commodo libero. Duis ut urna sit amet est id eget metus. Nulla et eros tellus, a hendrerit nulla. Maecenas adipiscing semper sapien at pretium. Aenean tortor leo, venenatis vitae pretium sit amet. Class aptent taciti sociosqu ad litora venenatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showView(view) {
            const links = document.querySelectorAll('nav a');
            links.forEach(link => link.classList.remove('active'));

            const activeLink = document.querySelector(`nav a[href*="${view}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const currentPath = window.location.pathname;
            const links = document.querySelectorAll('nav a');
            links.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
