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
        }

        .container {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: left;
            padding: 20px;
        }

        .flex-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .white-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
        }

        .logo-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .logo-container img {
            width: 80px;
            height: auto;
            margin: 10px;
        }

        .logo-container div {
            text-align: center;
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
                <div class="flex-container">
                    <!-- First white container -->
                    <div class="white-container">
                        <h2>About this Project</h2>
                        <p>This project is built using Laravel, a powerful PHP framework that simplifies web development by providing a robust set of tools and an elegant syntax. By leveraging Laravel's extensive libraries and built-in features, such as routing, middleware, and templating, this application aims to deliver a scalable, secure, and efficient solution. Whether you're building simple websites or complex web applications, Laravel provides a solid foundation for rapid development and long-term maintenance.</p>
                    </div>
                    <!-- Second white container -->
                    <div class="white-container">
                        <h2>Technologies Used</h2>
                        <div class="logo-container">
                            <!-- JavaScript Logo -->
                            <div>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript Logo">
                                <p>JavaScript</p>
                            </div>
                            <!-- PHP Logo -->
                            <div>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP Logo">
                                <p>PHP</p>
                            </div>
                            <!-- CSS Logo -->
                            <div>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS Logo">
                                <p>CSS</p>
                            </div>
                            <!-- HTML Logo -->
                            <div>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML Logo">
                                <p>HTML</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
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
