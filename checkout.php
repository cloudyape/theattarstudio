<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout | The Attar Studio</title>
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

<section class="px-10 py-20 grid md:grid-cols-2 gap-16 max-w-6xl mx-auto">
  <form class="space-y-6">
    <h2 class="luxury-font text-4xl text-yellow-500 mb-6">Checkout</h2>
    <input class="w-full bg-black border border-yellow-600/30 p-4" placeholder="Full Name">
    <input class="w-full bg-black border border-yellow-600/30 p-4" placeholder="Address">
    <button class="w-full py-4 bg-yellow-500 text-black uppercase tracking-widest">Place Order</button>
  </form>
</section>

<?php include 'assets/footer.php'; ?>
</body>
</html>
