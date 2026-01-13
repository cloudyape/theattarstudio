<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home | The Attar Studio</title>
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

<!-- HERO SECTION -->
<section class="min-h-[90vh] flex items-center px-10 relative">
  <div class="absolute inset-0">
    <img 
      src="https://images.unsplash.com/photo-1594035910387-fea47794261f"
      class="w-full h-full object-cover opacity-30"
      alt="Luxury Attar Background"
    />
  </div>

  <div class="relative max-w-2xl">
    <h2 class="luxury-font text-6xl leading-tight text-yellow-500 mb-6">
      A Signature of<br> Pure Luxury
    </h2>
    <p class="text-gray-300 mb-8 text-lg">
      Handcrafted luxury fragrances inspired by royalty, tradition,
      and timeless elegance.
    </p>
    <button class="px-10 py-4 border border-yellow-500 text-yellow-500 uppercase tracking-widest hover:bg-yellow-500 hover:text-black transition">
      Explore Collection
    </button>
  </div>
</section>

<!-- COLLECTION SECTION -->
<section class="px-10 py-20 bg-gradient-to-b from-black to-[#0b0b0b]">
  <h3 class="luxury-font text-4xl text-center text-yellow-500 mb-16">
    Our Exclusive Attars
  </h3>

  <div class="grid md:grid-cols-3 gap-10">

    <!-- CARD 1 -->
    <div class="card-hover border border-yellow-600/20 p-6 overflow-hidden">
      <img 
        src="https://images.unsplash.com/photo-1615634260167-c8cdede054de"
        class="h-64 w-full object-cover mb-6"
        alt="Royal Oud Attar"
      />
      <h4 class="luxury-font text-xl mb-2">Royal Oud</h4>
      <p class="text-gray-400 text-sm mb-4">
        Deep, woody and intense – crafted for royalty.
      </p>
      <span class="text-yellow-500 tracking-widest">₹4,999</span>
    </div>

    <!-- CARD 2 -->
    <div class="card-hover border border-yellow-600/20 p-6 overflow-hidden">
      <img 
        src="https://images.unsplash.com/photo-1585386959984-a41552231693"
        class="h-64 w-full object-cover mb-6"
        alt="Amber Noir Attar"
      />
      <h4 class="luxury-font text-xl mb-2">Amber Noir</h4>
      <p class="text-gray-400 text-sm mb-4">
        Warm amber blended with seductive spices.
      </p>
      <span class="text-yellow-500 tracking-widest">₹3,999</span>
    </div>

    <!-- CARD 3 -->
    <div class="card-hover border border-yellow-600/20 p-6 overflow-hidden">
      <img 
        src="https://images.unsplash.com/photo-1600180758890-6b94519a8ba6"
        class="h-64 w-full object-cover mb-6"
        alt="Musk Royale Attar"
      />
      <h4 class="luxury-font text-xl mb-2">Musk Royale</h4>
      <p class="text-gray-400 text-sm mb-4">
        Smooth musk for timeless sophistication.
      </p>
      <span class="text-yellow-500 tracking-widest">₹2,999</span>
    </div>

  </div>
</section>

<!-- CTA SECTION -->
<section class="px-10 py-24 text-center bg-black">
  <h3 class="luxury-font text-5xl text-yellow-500 mb-6">
    Crafted for the Elite
  </h3>
  <p class="text-gray-400 mb-10 max-w-xl mx-auto">
    Every drop tells a story of heritage, passion and perfection.
  </p>
  <button class="px-12 py-4 bg-yellow-500 text-black uppercase tracking-widest hover:opacity-90 transition">
    Order Now
  </button>
</section>

<?php include 'assets/footer.php'; ?>
</body>
</html>
