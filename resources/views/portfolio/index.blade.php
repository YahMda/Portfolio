<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio - Komang Mada</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1e1e1e] text-white font-sans">

  <!-- Navbar -->
  <nav class="bg-[#2d2d2d] p-4 flex justify-between items-center text-sm md:text-base">
    <div class="container max-w-7xl mx-auto flex items-center space-x-4 px-4">
      <span class="bg-white text-black px-2 py-1 rounded font-bold text-xs">LOGO</span>
      <a href="#" class="hover:text-gray-400">HOME</a>
      <a href="#" class="hover:text-gray-400">ABOUT</a>
      <a href="#" class="hover:text-gray-400">CONTACT</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="container max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-4 py-6">
    <!-- Biodata Box -->
    <div class="bg-[#3a3a3a] p-4 rounded-lg flex items-center space-x-4">
      <div class="w-20 h-20 bg-gray-500 rounded-lg flex-none"></div>
      <div>
        <h2 class="font-bold text-lg leading-tight">
          KOMANG MADA MAHA PUTRA<br>WILWATIKTA
        </h2>
        <p class="text-gray-300 text-sm mt-2">
          SMA PGRI BLAHBATUH<br>
          ITB STIKOM BALI
        </p>
      </div>
    </div>

    <!-- More About Me Box -->
    <div class="bg-[#3a3a3a] p-4 rounded-lg flex flex-col justify-between">
      <div class="w-full h-28 bg-gray-500 rounded-lg"></div>
      <p class="text-right mt-4 text-lg font-semibold">MORE ABOUT ME →</p>
    </div>
  </section>

  <!-- Projects & Social -->
  <section class="container max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-4 py-6">
    <!-- Project Carousel -->
    <div>
      <h3 class="font-bold text-xl mb-3">PROJECT</h3>
      <div class="flex items-center space-x-2">
        <button onclick="scrollProjects('left')" class="bg-gray-700 p-2 rounded">◀</button>
        <div id="projectContainer" class="flex overflow-x-auto space-x-4 scrollbar-hide scroll-smooth">
          <div class="w-36 h-36 bg-gray-500 rounded-lg flex-none"></div>
          <div class="w-36 h-36 bg-gray-500 rounded-lg flex-none"></div>
          <div class="w-36 h-36 bg-gray-500 rounded-lg flex-none"></div>
        </div>
        <button onclick="scrollProjects('right')" class="bg-gray-700 p-2 rounded">▶</button>
      </div>
    </div>

    <!-- Social Profile -->
    <div class="bg-[#3a3a3a] p-4 rounded-lg">
      <div class="flex justify-center space-x-6 text-2xl mb-4">
        <a href="#" class="hover:text-gray-400">📷</a>
        <a href="#" class="hover:text-gray-400">🐦</a>
        <a href="#" class="hover:text-gray-400">💼</a>
      </div>
      <p class="text-center text-lg font-semibold">PROFILE →</p>
    </div>
  </section>

  <!-- Download CV Section -->
  <section class="container max-w-7xl mx-auto px-4 py-6">
    <div class="bg-[#3a3a3a] p-6 rounded-lg text-center">
      <p class="font-semibold text-lg mb-3">⬇ DOWNLOAD MY CV HERE</p>
      <a href="cv-komangmada.pdf" download class="underline text-blue-400 hover:text-blue-600">
        Click to download CV
      </a>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-300 mt-6">
        <div>
          <p class="font-semibold text-white">📍 ADDRESS</p>
          <p>GIANYAR, BALI</p>
        </div>
        <div>
          <p class="font-semibold text-white">📧 EMAIL</p>
          <p>komangmadamaha123@gmail.com</p>
        </div>
        <div>
          <p class="font-semibold text-white">📞 PHONE</p>
          <p>012345678902</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-center p-4 mt-10 text-gray-400 text-sm">
    2025 © All rights reserved by Komang Mada
  </footer>

  <!-- Carousel Script -->
  <script>
    function scrollProjects(direction) {
      const container = document.getElementById('projectContainer');
      const scrollAmount = 200;
      container.scrollBy({
        left: direction === 'left' ? -scrollAmount : scrollAmount,
        behavior: 'smooth'
      });
    }
  </script>
</body>
</html>
