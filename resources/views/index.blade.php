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

<body>
    {{-- <div class="container">
      <div class="row" >
        <div class="col-6 mr-7">
          <img src="assets/petani.png" alt="" width="500">
        </div>
        <div class="col-6" style="margin-top: 15%">
         <h2>Tempat  untuk mencari kebutuhan pertanian maupun maritimmu.</h2>
         <p>Dalam platform ini, terdapat informasi lengkap tentang produk-produk yang ditawarkan, kualitasnya, serta cara pemesanan.</p>
        </div>
      </div>
    </div> --}}

    <nav class="h-auto w-full justify-between flex items-center">
        <div class="w-[90px] h-[66px] ml-[22px] mt-[22px]">
            <img class="" src="assets/LOGO.png" alt="">
        </div>
        <div>
            <button
                class="mr-auto bg-[#D5DBDA] w-[90px] h-[40px] drop-shadow-md rounded-md font-bold text-[#39938F] hover:bg-[#c1c7c6] hover:text-[#44c2bc] transition delay-150"><a
                    href="/signin">Sign In</a></button>
            <button
                class="mr-[22px] bg-[#39938F] w-[90px] h-[40px] drop-shadow-md rounded-md font-bold text-[#D5DBDA] hover:bg-[#2d7572] transition delay-150 hover:text-[#ffffff]"><a
                    href="/signup">Sign Up</a></button>
        </div>
    </nav>

    {{-- INI TEMPATNYA NELAYAN --}}
    <div class="h-auto w-full justify-between flex items-center">

        <div class="ml-[22px] w-auto">
            <h1 class="font-bold text-[49px] text-left">Tempat Para Petani dan Nelayan</h1>
            <p class="text-[20px] mt-[15px] leading-7 text-left w-[700px]">Selamat datang di Tempan, sebuah platform
                penjualan yang menyediakan berbagai jenis bibit tanaman serta hasil pertanian dan perikanan dari petani
                dan nelayan.</p>
        </div>

        <div class="w-[1150px] h-[750px] cursor-default">
            <img src="assets/nelayan.png">
        </div>

    </div>


    {{-- INI TEMPATNYA PETANI --}}
    <div class="h-auto w-full justify-between flex items-center">
        <div class="w-[1150px] h-[750px] cursor-default">
            <img src="assets/petani.png">
        </div>
        <div class="ml-[22px] w-auto">
            <h1 class="font-bold text-[49px]">Tempat untuk mencari <br> kebutuhan pertanian maupun maritimmu.</h1>
            <p class="text-[20px] mt-[15px] leading-7 text-left w-[700px]">Selamat datang di Tempan, sebuah platform
                penjualan yang menyediakan berbagai jenis bibit tanaman serta hasil pertanian dan perikanan dari petani
                dan nelayan.</p>
        </div>
    </div>



    <div class="content">
        <div class="text-center">
            <h1 class="text-[40px] font-bold">Menyediakan</h1>
            <p class="text-[21px] leading-6">menyediakan berbagai jenis bibit tanaman serta hasil pertanian dan
                <br>perikanan dari petani dan nelayan.
            </p>
        </div>
        <div class="flex flex-row justify-center mt-[22px] ">
            <div><a href="#"><img src="assets/bibittanaman.png" alt="" class="w-[200px]"></a></div>
            <div><a href="#"><img src="assets/hasiltani.png" alt="" class="w-[200px]"></a></div>
            <div><a href="#"><img src="assets/bibitikan.png" alt="" class="w-[200px]"></a></div>
            <div><a href="#"><img src="assets/hasilperikanan.png" alt="" class="w-[200px]"></a></div>
        </div>
    </div>


    {{-- INI FOOTER GUYS --}}
    <footer class=" mt-[250px] h-[200px] bg-[#D9D9D9]">
        <div class="w-full justify-between flex items-center text-[#39938F] ">
            <div class=" ml-[30px] mt-[22px] text-lg">
                <h1 class="font-bold ">Find Us</h1>
                <h1 class="flex items-center mt-[17px]"><img src="assets/ig.png" alt=""
                        class="w-[20px] mr-[12px]">@glvinrm</h1>
                <h1 class="flex items-center mt-[17px]"><img src="assets/ig.png" alt=""
                        class="w-[20px] mr-[12px]">@rmsyaptra</h1>
                <h1 class="flex items-center mt-[17px]"><img src="assets/ig.png" alt=""
                        class="w-[20px] mr-[12px]">@tiyo_chandra15</h1>

            </div>
            <div class="mr-[30px] mt-[22px] text-lg">
                <h1 class="font-bold">Admin</h1>
                <h1 class="flex items-center mt-[17px]"><img src="assets/telepon.png" alt=""
                        class="w-[20px] mr-[12px]">0881036876712</h1>
                <h1 class="flex items-center mt-[17px]"><img src="assets/telepon.png" alt=""
                        class="w-[20px] mr-[12px]">0881036876712</h1>
                <h1 class="flex items-center mt-[17px]"><img src="assets/telepon.png" alt=""
                        class="w-[20px] mr-[12px]">0881036876712</h1>
            </div>
        </div>

        <div class="text-center text-[#39938F] text-lg">
            <h1>© 2023 Tempan, Inc. All rights reserved.</h1>
        </div>
    </footer>



</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

</html>
