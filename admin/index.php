<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login / Register | The Attar Studio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Inter', sans-serif; }
    .luxury-font { font-family: 'Playfair Display', serif; }
  </style>
</head>

<body class="bg-black text-white">

<?php include '../assets/header.php'; ?>

<section class="min-h-[85vh] flex items-center justify-center px-6">
  <div class="w-full max-w-5xl grid md:grid-cols-2 gap-10 border border-yellow-600/20 p-10">

    <!-- LOGIN -->
    <div>
      <h2 class="luxury-font text-4xl text-yellow-500 mb-8">
        Welcome Back
      </h2>

      <form method="post" action="login-handler.php" class="space-y-6">

        <div>
          <label class="block text-gray-400 mb-2">Email</label>
          <input
            type="email"
            name="email"
            required
            class="w-full bg-black border border-yellow-600/30 p-4 focus:outline-none focus:border-yellow-500"
            placeholder="you@luxury.com"
          >
        </div>

        <div>
          <label class="block text-gray-400 mb-2">Password</label>
          <input
            type="password"
            name="password"
            required
            class="w-full bg-black border border-yellow-600/30 p-4 focus:outline-none focus:border-yellow-500"
            placeholder="••••••••"
          >
        </div>

        <button
          type="submit"
          class="w-full py-4 bg-yellow-500 text-black uppercase tracking-widest hover:opacity-90 transition"
        >
          Login
        </button>

      </form>
    </div>

    <!-- REGISTER -->
    <div class="border-l border-yellow-600/20 pl-10">
      <h2 class="luxury-font text-4xl text-yellow-500 mb-8">
        Create Account
      </h2>

      <form method="post" action="register-handler.php" class="space-y-6">

        <div>
          <label class="block text-gray-400 mb-2">Full Name</label>
          <input
            type="text"
            name="name"
            required
            class="w-full bg-black border border-yellow-600/30 p-4 focus:outline-none focus:border-yellow-500"
            placeholder="Your Name"
          >
        </div>

        <div>
          <label class="block text-gray-400 mb-2">Email</label>
          <input
            type="email"
            name="email"
            required
            class="w-full bg-black border border-yellow-600/30 p-4 focus:outline-none focus:border-yellow-500"
            placeholder="you@luxury.com"
          >
        </div>

        <div>
          <label class="block text-gray-400 mb-2">Password</label>
          <input
            type="password"
            name="password"
            required
            class="w-full bg-black border border-yellow-600/30 p-4 focus:outline-none focus:border-yellow-500"
            placeholder="••••••••"
          >
        </div>

        <button
          type="submit"
          class="w-full py-4 border border-yellow-500 text-yellow-500 uppercase tracking-widest hover:bg-yellow-500 hover:text-black transition"
        >
          Register
        </button>

      </form>
    </div>

  </div>
</section>

<?php include '../assets/footer.php'; ?>

</body>
</html>
