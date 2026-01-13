<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Collections | The Attar Studio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
<style>
body { font-family: 'Inter', sans-serif; }
.luxury-font { font-family: 'Playfair Display', serif; }
</style>
</head>
<body class="bg-black text-white">
<?php include 'assets/header.php'; ?>

<section class="px-10 py-20">
  <h2 class="luxury-font text-5xl text-yellow-500 text-center mb-16">Our Exclusive Attars</h2>
  <div class="grid md:grid-cols-3 gap-10">
    <a href="product.php" class="border border-yellow-600/20 p-6">
      <img src="https://images.unsplash.com/photo-1615634260167-c8cdede054de" class="h-64 w-full object-cover mb-6">
      <h3 class="luxury-font text-xl">Royal Oud</h3>
      <span class="text-yellow-500">₹4,999</span>
    </a>
  </div>
</section>

<?php include 'assets/footer.php'; ?>
</body>
</html>
