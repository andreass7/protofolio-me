{{-- NAVBAR --}}
<header class="h-20 p-5 bg-black flex justify-center fixed items-center top-0 left-0 right-0 ">
    <nav class="w-44">
        <ol class="grid grid-cols-2 place-items-center text-white ">
            <li class="py-1 cursor-pointer hover:bg-[#3D0000] "><a href="#home">Home</a></li>
            <li class="py-1 cursor-pointer hover:bg-[#3D0000] "><a href="#about">About</a></li>
            {{-- <li class="py-1 cursor-pointer hover:bg-[#3D0000] "><a href="">Contact Us</a> --}}
            </li>
        </ol>
    </nav>
</header>
@yield('content')
