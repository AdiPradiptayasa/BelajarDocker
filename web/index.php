<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- Tailwind CSS -->
   <link rel="stylesheet" href="./dist/style.css" />
   <!-- ionicons -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   <link rel="icon" href="/src/images/KA.png" type="image/x-icon" />
   <title>Ketut Adi Portfolio </title>
</head>
<style>
   .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background: #ffc107;
   }
</style>

   <body class="bg-black">
   <!-- Header-->
   <header class="fixed left-0 right-0 z-50 w-full transition-all duration-500">
      <div class="container px-4 py-8 mx-auto">
         <div class="flex items-center justify-between">
            <div class="flex items-center text-3xl text-white">
               <a href="#">Portfolio</a>
            </div>

            <!-- menu-->
            <div class="w-auto">
               <ul
                  class="fixed right-0 bg-dark flex flex-col items-center w-full transition-all duration-300 py-8 ease-in-out md:flex-row md:static md:w-auto md:bg-transparent md:py-0 px-7 md:pl-0 top-24 -left-[48rem]">
                  <li class="py-4 mx-3 md:py-0">
                     <a href="index.html"
                        class="text-lg text-white transition-all duration-300 hover:text-yellow-300">Home</a>
                  </li>
                  <li class="py-4 mx-3 md:py-0">
                     <a href="aboutus.html" class="text-lg text-white transition-all duration-300 hover:text-yellow-300"
                        transition-all duration-300>Destinasi Wisata</a>
                  </li>
                  <li class="py-4 mx-3 md:py-0">
                     <a href="shop.html" class="text-lg text-white transition-all duration-300 hover:text-yellow-300"
                        transition-all duration-300>Merchandise</a>
                  </li>
                  <li class="py-4 mx-3 md:py-0 md:hidden">
                     <div class="flex items-center text-white transition-all duration-300 hover:text-yellow-300">
                        <a href="#footer" class="text-lg">Hubungi Kami</a>
                        <ion-icon class="ml-2" name="arrow-forward-outline"></ion-icon>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- menu -->

            <!-- connect -->
            <div class="hidden w-auto md:block">
               <div class="flex items-center text-white hover:text-yellow-300">
                  <a href="#footer" class="text-lg">Hubungi Saya</a>
                  <ion-icon class="relative inline-block ml-2" name="arrow-forward-outline"></ion-icon>
               </div>
            </div>

            <div class="w-auto md:hidden">
               <ul class="flex items-center text-white">
                  <li class="z-30 flex items-center ml-6 text-3xl cursor-pointer md:hidden">
                     <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </header>
   <!-- Header -->

   <!-- bgt -->
   <span class="absolute right-0 blur-2xl opacity-70 z-[-1]"><img src="./src/images/design/blur1.svg" alt="" /></span>
   <!-- bg-->

   <!-- Hero -->
   <section class="flex justify-center min-h-screen vh-100 overflow-hidden">
      <div class="container flex flex-col items-center gap-4 px-4 md:flex-row">
         <div class="flex-col text-white md:w-full lg:w-2/5" data-aos="fade-right">
            <span class="text-xl font-light text-gray-400 md:text-2xl">Selamat Datang di Portofolio saya</span>
            <h1 class="my-2 text-4xl font-semibold md:text-5xl">Ketut Adi Pradiptayasa Agustana</h1>
            <hr class="h-1 my-6 bg-white w-28 md:my-8" />
            <p class="mt-6 desc">Seorang Mahasiswa Ilmu Komputer Semester IV dengan NIM 2215101015 di Universitas Pendidikan Ganesha.</p>
         </div>

         <div class="flex justify-center mt-8 md:w-full lg:w-2/5 md:mt-0" data-aos="fade-down">
            <img src="./src/images/home.jpg" alt="Adi Pradiptayasa" />
         </div>

      </div>
      </div>
   </section>
   <!--  Hero -->

   <!-- bg -->
   <span class="absolute blur-2xl -mt-[29rem] -left-16 z-[-1] opacity-70">
      <img src="./src/images/design/blur2.svg" alt="" />
   </span>
   <!-- bg -->

   <!-- bg-->
   <span class="absolute blur-2xl -mt-[12rem] right-0 z-[-1] opacity-70">
      <img src="./src/images/design/blur3.svg" alt="" />
   </span>
   <!-- bg -->

   <!-- Portfolio -->
   <section class="container">
      <div class="px-4 py-10 rounded-none md:rounded-lg md:p-10 bg-dark/40">
         <div class="flex items-center justify-between">
            <h3 class="section-title">Portfolio Saya</h3>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8 md:gap-6">
            <!--Portfolio1-->
            <a href="https://adipradiptayasa.github.io/KalkulatorAritmatika/" target="_blank" class="group"
               data-aos="zoom-out" data-aos-delay="300">
               <div class="h-full overflow-hidden rounded-xl">
                  <div class="object-cover object-center w-full overflow-hidden">
                     <img
                        class="w-full h-52 sm:h-80 md:h-60 lg:h-72 transition-all duration-300 ease-in-out object-cover group-hover:rotate-2 group-hover:scale-110"
                        src="./src/images/fibonacci.jpg" alt="Website Travel pergi ketempat yang indah" />
                  </div>
                  <div class="p-5 bg-dark/30">
                     <h4 class="text-xl md:text-2xl font-medium text-white font-DmSans">Coding</h4>
                     <span class="text-sm md:text-xl text-gray-500 font-DmSans">Laravel - PHP </span>
                  </div>
               </div>
            </a>
            <!--Portfolio1-->

            <!-- Portfolio2-->
            <a href="index.html" target="_blank" class="group" data-aos="zoom-out" data-aos-delay="500">
               <div class="h-full overflow-hidden rounded-xl">
                  <div class="object-cover object-center w-full overflow-hidden">
                     <img
                        class="w-full h-52 sm:h-80 md:h-60 lg:h-72 transition-all duration-300 ease-in-out object-cover group-hover:rotate-2 group-hover:scale-110"
                        src="./src/images/webporto.jpg" alt="Clipboard challenge from front end mentor" />
                  </div>
                  <div class="p-5 bg-dark/30">
                     <h4 class="text-xl md:text-2xl font-medium text-white font-DmSans">Portfolio</h4>
                     <span class="text-sm md:text-xl text-gray-500 font-DmSans">Github</span>
                  </div>
               </div>
            </a>
            <!--Portfolio2-->

            <!--Portfolio3-->
            <a href="https://drive.google.com/drive/folders/1zCJftizbjblX4bArfbtnwOnfyDyQmQ7K?usp=sharing"
               target="_blank" class="group" data-aos="zoom-out" data-aos-delay="700">
               <div class="h-full overflow-hidden rounded-xl">
                  <div class="object-cover object-center w-full overflow-hidden">
                     <img
                        class="w-full h-52 sm:h-80 md:h-60 lg:h-72 transition-all duration-300 ease-in-out object-cover group-hover:rotate-2 group-hover:scale-110"
                        src="./src/images/editing.jpg" alt="website poersonal portfolio" />
                  </div>
                  <div class="p-5 bg-dark/30">
                     <h4 class="text-xl md:text-2xl font-medium text-white font-DmSans">Editing Video</h4>
                     <span class="text-sm md:text-xl text-gray-500 font-DmSans">Premiere Pro</span>
                  </div>
               </div>
            </a>
            <!--Portfolio3-->

         </div>
      </div>
   </section>
   <!-- Portfolio -->

   <!-- bg -->
   <span class="absolute left-0 -mt-[25rem] blur-2xl w-auto opacity-70 z-[-1]"><img src="./src/images/design/blur4.svg"
         alt="" /></span>
   <!-- bg -->

   <!-- qoutes -->
   <section class="container px-4 overflow-hidden">
      <div class="flex flex-col justify-center" data-aos="zoom-out-down">
         <h3
            class="text-xl text-center font-semibold mx-auto text-white font-DmSans md:text-[48px] leading-relaxed tracking-wide md:max-w-[54rem]">
            Fortis Fortuna Adiuvat. <br />
            (Anonim)
         </h3>
      </div>
   </section>
   <!-- qoutes -->

   <!-- Footer -->
   <footer class="bg-dark/40" id="footer">
      <div class="flex flex-col justify-center py-8">
         <h3 class="text-2xl font-semibold tracking-wide text-center text-white font-DmSans md:text-4xl"> Ingin kenal
            lebih dekat ?</h3>
         <h5 class="mt-8 text-base text-center md:text-2xl text-slate-300">
            hubungi saya di platform media sosial dibawah ini
         </h5>
         <div class="flex flex-row justify-center gap-8 mt-8">
            <a class="text-3xl text-white transition-all focus:text-yellow-500 hover:scale-110 hover:text-yellow-300"
               href="https://instagram.com/ketutadiii?igshid=OGQ5ZDc2ODk2ZA=="> <ion-icon
                  name="logo-instagram"></ion-icon></a>
            <a class="text-3xl text-white transition-all focus:text-yellow-500 hover:scale-110 hover:text-yellow-300"
               href="https://www.linkedin.com/in/ketut-adi-pradiptayasa-agustana-b60404115/"><ion-icon
                  name="logo-linkedin"></ion-icon></a>
            <a class="text-3xl text-white transition-all focus:text-yellow-500 hover:scale-110 hover:text-yellow-300"
               href="https://www.youtube.com/c/KetutAdiii"><ion-icon name="logo-youtube"></ion-icon></a>
         </div>
      </div>
      <div class="py-8 border-t border-gray-600">
         <h6 class="text-base text-center text-slate-300">Copyright © 2024 Adi Pradipta. Allright Reserved.</h6>
      </div>
   </footer>
   <!-- Footer -->


   <!-- Initialize AOS -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init({
         duration: 800,
      });
   </script>

   <script src="./src/main.js">

   </script>
</body>

</html>