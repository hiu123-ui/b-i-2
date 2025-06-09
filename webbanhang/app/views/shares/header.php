<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Quản lý sản phẩm</title> 
    <link 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
rel="stylesheet"> 
</head> 
<style>
    /* General body styling */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa; /* Light background */
        margin: 0;
        padding: 0;
        color: #343a40; /* Default text color */
    }

    /* Navbar styling */
    .navbar {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
        background-color: #ffffff; /* White background for navbar */
        padding: 15px 20px; /* Increased padding for better spacing */
        border-bottom: 2px solid #007bff; /* Add a border for emphasis */
    }

    .navbar-brand {
        font-weight: bold;
        color: #007bff !important; /* Highlight brand */
        font-size: 2rem; /* Larger font size for brand */
        text-transform: uppercase; /* Make brand text uppercase */
        letter-spacing: 1px; /* Add spacing between letters */
    }

    .nav-link {
        color: #343a40 !important; /* Darker text for links */
        font-size: 1rem; /* Adjust font size */
        margin: 0 15px; /* Add spacing between links */
        transition: color 0.3s ease, transform 0.3s ease; /* Smooth hover effect */
    }

    .nav-link:hover {
        color: #007bff !important; /* Hover effect */
        transform: scale(1.1); /* Slight zoom effect */
        text-decoration: underline; /* Add underline on hover */
    }

    /* Container styling */
    .container {
        padding: 40px; /* Increased padding for better spacing */
        border-radius: 10px;
        background: #ffffff; /* White container background */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        margin-top: 30px; /* Add spacing from navbar */
    }

    h1 {
        font-size: 2.5rem; /* Larger font size for header */
        font-weight: bold;
        color: #007bff;
        text-align: center;
        margin-bottom: 30px; /* Increased spacing below header */
    }

    /* Footer styling */
    footer {
        background-color: #007bff;
        color: #ffffff;
        text-align: center;
        padding: 15px 0; /* Increased padding for footer */
        margin-top: 40px; /* Add spacing above footer */
        font-size: 1rem; /* Adjust font size */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .navbar-brand {
            font-size: 1.5rem; /* Adjust brand size for smaller screens */
        }

        .nav-link {
            font-size: 0.9rem; /* Adjust link size for smaller screens */
        }

        .container {
            padding: 20px; /* Reduce padding for smaller screens */
        }

        h1 {
            font-size: 2rem; /* Adjust header size for smaller screens */
        }
    }
</style>
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="#">Quản lý sản phẩm</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data
target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle 
navigation"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
        <div class="collapse navbar-collapse" id="navbarNav"> 
           <ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="/webbanhang/Product/">Danh sách sản phẩm</a>
</li>
<?php if (SessionHelper::isAdmin()): ?>
<li class="nav-item">
<a class="nav-link" href="/webbanhang/Product/add">Thêm sản phẩm</a>
</li>
<?php endif; ?>
<li class="nav-item">
<?php
if (SessionHelper::isLoggedIn()) {
echo "<a class='nav-link'>" . htmlspecialchars($_SESSION['username']) . "

(" . SessionHelper::getRole() . ")</a>";
} else {
echo "<a class='nav-link' href='/webbanhang/account/login'>Đăng nhập</a>";
}
?>
</li>
<li class="nav-item">
<?php
if (SessionHelper::isLoggedIn()) {
echo "<a class='nav-link' href='/webbanhang/account/logout'>Đăng

xuất</a>";
}
?>
</li>
</ul>
        </div> 
    </nav> 
    <div class="container mt-4">