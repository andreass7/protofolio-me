<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY Portofolio</title>
    <link rel="icon" href="" type="">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-black overflow-x-hidden">
    @include('navbar')
    {{-- @include('mouse') --}}
    {{-- HOME --}}
    <section class="h-screen sm:px-3 grid place-items-center" id="home">
        <div class="text-white text-center my-14 ">
            <p class="font-inter font-light text-[24px] mb-3" data-aos="zoom-in" data-aos-duration="1000">Hai, saya
            </p>
            <p class="font-inter font-bold text-7xl uppercase sm:text-2xl md:text-6xl nama lg:text-4xl"
                data-aos="fade-down" data-aos-duration="1500">
                Andreas Adi Prasetyo
            </p>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="grid place-items-center py-44">
        <div
            class="grid grid-cols-2 place-items-center space-x-24 lg:grid-cols-1 lg:space-y-8 lg:place-items-center md:grid-cols-1 md:space-y-8 md:space-x-0 lg:space-x-0 md:place-items-center sm:grid-cols-1 sm:space-y-8 sm:space-x-0">
            <div class=" w-[250px]" data-aos="fade-right" data-aos-duration="1000">
                <img id="image2" src="{{ asset('img/b.jpg') }}"
                    class="img1 w-full h-full blur-sm hover:blur-none hover:scale-105 transition-all">
            </div>
            <div class="text-white tracking-wider text-lg md:text-center lg:text-center md:tracking-normal lg:tracking-normal sm:text-center sm:tracking-normal"
                data-aos="fade-left" data-aos-duration="1000">
                <p>Panggil saja saya <span class="font-bold">Andre</span>, </p>
                <p>saya dari <span class="font-bold">Universitas Janabadra</span>,</p>
                <p>jurusan <span class="font-bold">Teknik Informatika</span> dan </p>
                <p>saat ini saya <span class="font-bold">Semester 7</span></p>
                <p>Salam Kenal ✌️</p>
                <div
                    class="w-[170px] h-auto bg-[#585858] p-2 rounded-2xl flex justify-evenly mt-8 lg:mx-auto md:mx-auto sm:mx-auto">
                    <a href="https://www.linkedin.com/in/andreasadi/" target="_blank">
                        <img src="{{ asset('img/linkedin.svg') }}" alt=""
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                    <a href="https://www.instagram.com/andreasadii_/" target="_blank">
                        <img src="{{ asset('img/instagram.svg') }}" alt=""
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                    <a href="https://github.com/andreass7" target="_blank">
                        <img src="{{ asset('img/github.svg') }}" alt=""
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- SKILL --}}
    <section id="skill" class="pt-24 pb-[120px] px-10 md:px-1 sm:px-1 lg:px-1 bg-[#3D0000]">
        <div data-aos="zoom-in" data-aos-duration="2000">
            <div
                class="relative w-[750px] h-[750px] p-10 bg-black mx-auto rounded-full animate-rotate md:p-3 lg:p-1 md:w-[350px] md:h-[350px] lg:w-[380px] lg:h-[380px] sm:w-[360px] sm:h-[360px] ">
                <img src="{{ asset('img/php.svg') }}"
                    class="absolute top-2 translate-x-1/2 left-80 mx-auto animate-rotate2 md:w-16 md:left-[150px] md:top-4 lg:w-16 lg:top-5 lg:left-40 sm:w-12 sm:top-5 sm:left-40">
                <img src="{{ asset('img/tailwind.svg') }}"
                    class="absolute top-36 left-24 animate-rotate2 md:w-16 md:top-16 md:left-14 lg:w-16 lg:top-16 lg:left-14 sm:w-12 sm:top-16 sm:left-14 ">
                <img src="{{ asset('img/bootstrap.svg') }}"
                    class="absolute top-36 right-32 animate-rotate2 md:w-12 md:top-16 md:right-14 lg:w-12 lg:top-16 lg:right-14 sm:w-10 sm:top-16 sm:right-14">
                <p
                    class="absolute translate-y-1/2 bottom-1/2 translate-x-1/2 left-80 text-white font-inter font-medium text-[40px] uppercase tracking-widest animate-rotate2 md:text-xl md:left-[150px] md:translate-x-1/2 lg:text-xl lg:left-40 sm:text-lg sm:left-40">
                    Skill
                </p>
                <img src="{{ asset('img/javascript-.svg') }}"
                    class="absolute translate-y-1/2 bottom-1/2 animate-rotate2 md:w-10 md:left-8 lg:w-10 lg:left-8 sm:w-10 ">
                <img src="{{ asset('img/laravel.svg') }}"
                    class="absolute translate-y-1/2 bottom-1/2 right-10 animate-rotate2 md:w-12 md:right-6 lg:w-12 lg:right-8 sm:w-10 ">
                <img src="{{ asset('img/codeigniter.svg') }}"
                    class="absolute bottom-36 left-32 animate-rotate2 md:w-14 md:bottom-20 md:left-14 lg:bottom-20 lg:left-14 lg:w-14 sm:bottom-20 sm:left-14 sm:w-14">
                <img src="{{ asset('img/FIGMA.svg') }}"
                    class="absolute translate-x-1/2 left-80 bottom-10 animate-rotate2 md:w-10 md:left-[150px] lg:w-10 lg:left-44 lg:bottom-4 sm:w-8 sm:left-44 sm:bottom-7">
                <img src="{{ asset('img/canva.svg') }}"
                    class="absolute bottom-36 right-32 animate-rotate2 md:w-14 md:right-14 md:bottom-20 lg:right-14 lg:bottom-20 lg:w-12 sm:right-14 sm:bottom-20 sm:w-12">
            </div>
        </div>
    </section>

    {{-- RECENT PROJECT --}}
    <section id="recent-project" class="pt-24 pb-20 px-10 bg-[#3D0000] md:px-4 md:pb-3 sm:px-4 sm:pb-2 lg:px-4">
        <h6 class="text-white font-inter font-medium text-[40px] text-center uppercase tracking-widest"data-aos="fade-up"
            data-aos-duration="1000">recent project
        </h6>
        <div class="grid grid-cols-3 gap-5 mt-10 md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-1">
            <div class="w-full rounded-lg bg-[#531111] p-4 py-4 shadow-xl" data-aos="fade-right"
                data-aos-duration="3000">
                <h6 class="text-[#D3D3D3] font-inter font-bold text-[20px]">Aplikasi Perpustakaan</h6>
                <p class="text-[#D3D3D3] mt-2 font-light">aplikasi untuk membaca buku secara online di
                    device Mobile </p>
                <div class="flex mt-2 space-x-1.5">
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">Kotlin</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">Java</p>
                </div>
                <div class="mt-4 flex space-x-3 justify-center">
                    <img src="{{ asset('img/image1.svg') }}" alt="" class=" h-auto">
                    <img src="{{ asset('img/image2.svg') }}" alt="" class="">
                </div>
            </div>
            <div class="w-full rounded-lg bg-[#531111] p-4 shadow-xl" data-aos="fade-right" data-aos-duration="2000">
                <h6 class="text-[#D3D3D3] font-inter font-bold text-[20px]">UKM Ledjar Wayang Shop</h6>
                <p class="text-[#D3D3D3] mt-2 font-light">aplikasi bertujuan untuk memenuhi tugas Metode
                    Numerik dengan melakukan perhitungan
                    menggunakan metodde Gauss ordan</p>
                <div class="flex mt-2 space-x-1.5">
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">PHP</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">HTML</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">CSS</p>
                    <a href="https://github.com/andreass7/Wayang-Kulit" target="_blank">
                        <img src="{{ asset('img/icons.svg') }}"
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                </div>
                <div class="mt-4 flex space-x-3 justify-center">
                    <img src="{{ asset('img/image3.svg') }}" alt="" class="mt-7 w-full ">
                </div>
            </div>
            <div class="w-full rounded-lg bg-[#531111] p-4 shadow-xl" data-aos="fade-right" data-aos-duration="1000">
                <h6 class="text-[#D3D3D3] font-inter font-bold text-[20px]">Aplikasi Pengelompokkan
                    Desa</h6>
                <p class="text-[#D3D3D3] mt-2 font-light">Aplikasi tentang implementasi data untuk
                    mengelompokkan Desa Wisata Terfavorit
                    di Sleman dengan Metode Euclidian Distance</p>
                <div class="flex mt-2 space-x-1.5">
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">PHP</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">HTML</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">CSS</p>
                    <a href="https://github.com/andreass7/kecerdasanAI" target="_blank">
                        <img src="{{ asset('img/icons.svg') }}"
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                </div>
                <div class="mt-4 flex space-x-3 justify-center">
                    <img src="{{ asset('img/image4.svg') }}" alt="" class="mt-7 w-full ">
                </div>
            </div>
            <div class="w-full rounded-lg bg-[#531111] p-4 shadow-xl" data-aos="fade-left" data-aos-duration="1000">
                <h6 class="text-[#D3D3D3] font-inter font-bold text-[20px]">Oleh Oleh Khas Jogja</h6>
                <p class="text-[#D3D3D3] mt-2 font-light">aplikasi untuk melihat produk khas dari Yogyakarta</p>
                <div class="flex mt-2 space-x-1.5">
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">HTML</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">CSS</p>
                    <a href="https://github.com/DxCorporation/Template" target="_blank">
                        <img src="{{ asset('img/icons.svg') }}"
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                </div>
                <div class="mt-4 flex space-x-3 justify-center">
                    <img src="{{ asset('img/image5.svg') }}" alt="" class="mt-7 w-full ">
                </div>
            </div>
            <div class="w-full rounded-lg bg-[#531111] p-4 shadow-xl" data-aos="fade-left" data-aos-duration="2000">
                <h6 class="text-[#D3D3D3] font-inter font-bold text-[20px]">Pokemon</h6>
                <p class="text-[#D3D3D3] mt-2 font-light">aplikasi untuk melihat daftar Pokemon dari API</p>
                <div class="flex mt-2 space-x-1.5">
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">PHP</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">HTML</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">JavaScript</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">Tailwind</p>
                    <a href="https://github.com/andreass7/tailwind-projek" target="_blank">
                        <img src="{{ asset('img/icons.svg') }}"
                            class="cursor-pointer hover:scale-110 transition-all">
                    </a>
                </div>
                <div class="mt-4 flex space-x-3 justify-center">
                    <img src="{{ asset('img/Group6.svg') }}" alt="" class="mt-7 w-full ">
                </div>
            </div>
            <div class="w-full rounded-lg bg-[#531111] p-4 shadow-xl" data-aos="fade-left" data-aos-duration="3000">
                <h6 class="text-[#D3D3D3] font-inter font-bold text-[20px]">Titip Sini</h6>
                <p class="text-[#D3D3D3] mt-2 font-light">Projek magang yang berisi tentang
                    jasa penitipan barang</p>
                <div class="flex mt-2 space-x-1.5">
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">PHP</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">HTML</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">JavaScript</p>
                    <p class="bg-[#2E2222] text-[#D3D3D3] py-1.5 px-2 text-xs rounded-md">Tailwind</p>
                </div>
                <div class="mt-4 flex space-x-3 justify-center">
                    <img src="{{ asset('img/Group7.svg') }}" alt="" class="mt-7 w-full ">
                </div>
            </div>

        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
