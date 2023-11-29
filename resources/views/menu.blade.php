<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEMPAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha3849-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#39938F]">
    <nav class="h-auto w-full justify-between flex items-center">
        <div class="mt-[22px] ml-[22px]">
            <img src="assets/LOGO.png" alt="" class="w-auto h-[80px]">
        </div>

        <div>
            <input type="text"
                class=" mt-[17px] text-black bg-gray-50 border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-[#DDE6ED] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 center w-[500px] h-[50px] drop-shadow-xl"
                placeholder="Search" style="box-sizing: border-box">
        </div>

        <div class="flex flex-row w-auto h-[30px]">
            <img src="assets/profile.png" alt="" class="mr-[22px]" class="hover:drop-shadow-xl">
            <img src="assets/message.png" alt="" class="mr-[22px]">
            <img src="assets/keranjang.png" alt="" class="mr-[22px]">
        </div>
    </nav>


    <!-- TANAMAAAANNNNNNN -->
    <div class="flex flex-col bg-[#39938F] p-auto mt-[150px]">
        <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-40 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
            Bibit & Hasil Sayuran
        </h1>
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar ">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/BIBITKANGKUNG.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitsawi.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitbayam.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitseledri.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitselada.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitsawiputih.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-[#39938F] p-auto mt-[7px]">
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar ">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/sayurkangkung.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/sayursawi.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/sayurbayam.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/sayurseledri.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/sayurselada.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/sayursawiputih.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- IIKAAAAAANNNNNNNN --}}
    <div class="flex flex-col bg-[#39938F] p-auto mt-[55px]">
        <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-40 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
            Bibit & Hasil Ikan
        </h1>
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar ">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitdori.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitsalmon.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitkakap.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitkerapu.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibitpari.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/bibittuna.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col bg-[#39938F] p-auto mt-[7px]">
        <div class="flex overflow-x-scroll pb-10 hide-scroll-bar ">
            <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/ikandori.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/ikansalmon.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/ikankakap.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/ikankerapu.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/ikanpari.png" alt="">
                    </div>
                </div>
                <div class="inline-block px-3">
                    <div
                        class="w-64 h-auto max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <img src="assets/ikantuna.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <style>
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }
    </style>
</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

</html>
