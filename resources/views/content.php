<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            gap: 50px;
            flex-wrap: wrap;
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

        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
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
                        <h2>Personal Details</h2>
                        <ul>
                            <li><strong>Name:</strong> Juliane Rebecca S. Dayandante</li>
                            <li><strong>Age:</strong> 20</li>
                            <li><strong>Contact Number:</strong> 09637799645</li>
                            <li><strong>Date of Birth:</strong> October 22, 2003</li>
                            <li><strong>Hobbies:</strong> Reading, Hiking, Coding</li>
                            <li><strong>Email:</strong> dayandantejuliane@gmail.com</li>
                        </ul>
                        <h2>Education</h2>
                        <ul>
                            <li><strong>Elementary School:</strong> Pioduran West Central School</li>
                            <li><strong>High School:</strong> San Lorenzo Academy De La Salle Supervised School</li>
                            <li><strong>College:</strong> Bicol University</li>
                        </ul>
                    </div>
                    <!-- Second white container -->
                    <div class="white-container">
                        <h2>Skills</h2>
                        <div class="chart-container">
                            <canvas id="skillsChart"></canvas>
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

        // Chart.js code for bar chart
        const ctx = document.getElementById('skillsChart').getContext('2d');
        const skillsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Communication', 'PHP', 'CSS', 'HTML', 'Python', 'Active Listening'],
                datasets: [{
                    label: 'Skill Level',
                    data: [80, 70, 50, 85, 60, 75], 
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    });
</script>
