<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha3849-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>


<body>
    <div class="login flex w-full h-screen">
        <div class="left w-1/2 ">
            <div class="left-wrapper bg-gradient-to-b from-[#CFF5E7] to-[#53C3BC]  h-full relative flex flex-col"
                style="position: relative">
                <div class="nav pt-[22px] pl-[22px] w-[50px] ">
                    <a href="/index"><img src="assets/back.png " alt=""></a>
                </div>
                <div class="isi flex flex-col items-center justify-center text-center mt-[30%]">
                    <h1 class="font-bold text-[40px]" style="z-index: 22;">Hello Friends!</h1>
                </div>
                <img src="assets/Rectangle 15.png" class="absolute right-0 bottom-0 w-[300px]"
                    style="position: absolute; z-index: 1;" alt="">
                <div class=" flex flex-col items-center justify-center text-center">
                    <button
                        class="mt-[22px] rounded-full bg-[#DDE6ED] w-[300px] h-[70px] font-extrabold box drop-shadow-xl hover:bg-[#bfc5c9] transition delay-150"
                        style="z-index: 22;">
                        <a href="/signin" class="text-[25px]">SIGN IN</a></button>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="right w-1/2 h-full">
            <div class="grid justify-items-end mt-[22px] mr-[22px]">
                <img src="assets/LOGO.png" alt="" class="w-[90px]">
            </div>
            <div class="mt-[110px]">
                <h1 class="text-center text-[40px] font-bold">Create Account</h1>
                <div class="bungkus flex flex-col items-center justify-center">

                    <form method="POST" action="{{ url('/signup') }}">
                        @csrf
                        <input for="name" name="name" :value=""
                            class=" mt-[17px] text-black bg-gray-50 border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-[#DDE6ED] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 center w-[500px] h-[50px] drop-shadow-xl"
                            placeholder="Nama" style="box-sizing: border-box" required />


                        <input for="email" name="email" :value=""
                            class=" mt-[22px] text-black bg-gray-50 border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-[#DDE6ED] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 center w-[500px] h-[50px] drop-shadow-xl"
                            placeholder="E-mail" style="box-sizing: border-box" required>


                        <input type="password" name="password" :value=""
                            class=" mt-[22px] text-black bg-gray-50 border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-[#DDE6ED] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 center w-[500px] h-[50px] drop-shadow-xl"
                            placeholder="Password" style="box-sizing: border-box" required autocomplete="new-password">

                        <button type="submit"
                            class="mt-[22px] rounded-full bg-[#DDE6ED] w-[150px] h-[60px] font-extrabold box drop-shadow-xl justify-center">SIGN
                            UP</button>



                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

</html>
