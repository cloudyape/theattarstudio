<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>The Attar Studio | Luxury Fragrances</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Luxury Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .luxury-font {
      font-family: 'Playfair Display', serif;
    }
    .card-hover img {
      transition: transform 0.6s ease;
    }
    .card-hover:hover img {
      transform: scale(1.06);
    }
  </style>
</head>

<body class="bg-black text-white">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-10 py-6 border-b border-yellow-600/30">
  <h1 class="luxury-font text-2xl tracking-widest text-yellow-500">
    THE ATTAR STUDIO
  </h1>
  <ul class="flex gap-8 text-sm uppercase tracking-widest text-gray-300">
    <li class="hover:text-yellow-500 cursor-pointer">Home</li>
    <li class="hover:text-yellow-500 cursor-pointer">Collections</li>
    <li class="hover:text-yellow-500 cursor-pointer">About</li>
    <li class="hover:text-yellow-500 cursor-pointer">Contact</li>
  </ul>
</nav>