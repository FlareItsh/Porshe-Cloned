<?php
    $APP_NAME = "PORSHE";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $APP_NAME?> </title>
    <link href="https://fonts.cdnfonts.com/css/911-porscha" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="./output.css" rel="stylesheet">
</head>
<body>

    <!-- <img src="./images/hero-bg.jpg" alt="bg" class="h-screen w-full object-cover absolute"> -->
    <div class="bg-[url('./images/hero-bg.jpg')] bg-cover bg-top bg-no-repeat h-screen w-full absolute -z-20">
        <div class="h-full w-full bg-black/20"></div>
    </div>

    <nav class="px-20 py-3 shadow-2xl text-white bg-gray-500/35 sticky w-full">
        <ul class="flex justify-between items-center">
            <li>
                <i class="fa-solid fa-bars"></i>
                <a href="#">Menu</a>
            </li>
            <li>
                <h1 class="font-primary text-2xl font-medium" style="font-family: '911 Porscha', sans-serif;"><?php echo $APP_NAME?></h1>
            </li>
            <li>
                <i class="fa-regular fa-user"></i>
            </li>
        </ul>
    </nav>

    <main class="mt-20 px-40 h-screen">
        <h1 class="text-white text-7xl w-[95vh] font-light" style="font-family: '911 Porscha', sans-serif; ">Some feeling never fade.</h1>
        <button class="border-2 text-white px-6 py-4 border-white rounded-md hover:bg-gray-500/20 hover:border-gray-500 transition-all ease-in-out duration-200">
        Porshe. There is no substitute.
        </button>
    </main>

    <section class="h-screen">
        <div class="h-xs w-xs rounded-3xl relative">
            <img src="./images/911gt3rs.jpg" alt="911" class="rounded-3xl h-full">
            <p class="absolute">991 GT3.</p>
        </div>
    </section>

</body>
</html>
