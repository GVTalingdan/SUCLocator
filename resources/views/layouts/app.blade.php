<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Make the navbar background transparent */
        .navbar {
            background-color: transparent !important;
            /* Set background to transparent */
            box-shadow: none;
            /* Remove any box-shadow that might appear */
        }

        /* Make navbar text and links white to stand out */
        .navbar-brand,
        .navbar-nav .nav-link {
            color: rgb(233, 8, 8) !important;
            /* White text for the brand and links */
        }

        /* Change link color on hover */
        .navbar-nav .nav-link:hover {
            color: #FFD700 !important;
            /* Gold color on hover */
        }

        /* Icon space and color */
        .navbar .fa-map-marker-alt {
            margin-right: 2px;
            /* Space between the icon and text */
        }

        /* Add some padding to the navbar */
        .navbar-nav {
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Navbar Brand with Pinpoint Icon -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-map-marker-alt"></i> Map
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Right-aligned items -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content') <!-- This
