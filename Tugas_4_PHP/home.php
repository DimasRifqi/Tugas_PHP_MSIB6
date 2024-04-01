<?php 

    $pembuka = "Perkenalkan nama saya Dimas";
    $isi = "Saya adalah mahasiswa jurusan Teknik Informatika angkatan 2021 di ITATS";
    $github = "https://github.com/DimasRifqi";
    $wa = "https://api.whatsapp.com/send/?phone=6289604176955&text&type=phone_number&app_absent=0";

    $nama = "Dimas Rifqi Ramadhani";
    $jurusan = "Teknik Informatika";
    $alamat = "Alam pesona 1 blok eb 1 no 23";
    $profesi = "Mahasiswa";

    $SMP = "SMPN 3 TAMAN";
    $desSMP = "Sekolah ini memiliki motto “Spentita Pasti
    Bisa, Berkarakter, Berakhlak Mulia, Mandiri dan Berprestasi” yang mencerminkan komitmennya
    terhadap pembentukan karakter dan pencapaian akademis siswa";
    $tahunSMP = "2015 - 2018";
    $linkSMP = "https://www.smpn3taman.sch.id/";
    
    $SMK = "SMK PEMUDA KRIAN";
    $desSMK = "Dengan akreditasi “A”, SMK Pemuda
    Krian menawarkan program keahlian di bidang Akuntansi, Multimedia, dan Bisnis Daring dan
    Pemasaran.";
    $tahunSMK = "2018 - 2021";
    $linkSMK = "https://smk-pemuda-krian.sch.id/";
    
    $Kuliah = "INSTITUT TEKNOLOGI ADHI TAMA SURABAYA";
    $desKuliah = "Berdiri pada tahun 1963 dengan nama Akademi Teknik Surabaya (ATS), ITATS telah
    berkembang menjadi institusi yang menyediakan pendidikan berkualitas tinggi di bidang sains,
    teknologi, dan seni";
    $tahunKuliah = "NOW";
    $linkKuliah = "https://itats.ac.id/";
    

?>


<section
    class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            <?= $pembuka ?></h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
            <?= $isi ?>
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                MY GITHUB
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            <a href="<?= $github ?>"
                class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>
        </div>
    </div>
</section>

<div class="container flex justify-center items-center mt-5">

    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 16 3">
                    <path
                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><?= $jurusan ?></a>
                    </li>
                    <li>
                        <a href="<?= $wa ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">+62*****
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><?= $alamat ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="img/profile.png" alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= $nama ?></h5>
            <span class="text-sm text-gray-500 dark:text-gray-400"><?= $profesi ?></span>
            <div class="flex mt-4 md:mt-6">
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                    friend</a>

                <a href="<?= $wa ?>"
                    class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Message</a>
            </div>
        </div>
    </div>





</div>



<div class="container flex justify-center items-center mt-5">

    <ol class="relative border-s border-gray-200 dark:border-gray-700">
        <li class="mb-10 ms-6">
            <span
                class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                <img class="rounded-full shadow-lg" src="img/profile.png" alt="Thomas Lean image" />
            </span>
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                <div class="items-center justify-between mb-3 sm:flex">
                    <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0"><?= $tahunSMP ?></time>
                    <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Sekolah Menengah
                        Pertama
                        (SMP)
                        <a href="<?= $linkSMP ?>" class="font-semibold text-gray-900 dark:text-white hover:underline">
                            <?= $SMP ?> </a>
                    </div>
                </div>
                <div
                    class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">
                    <?= $desSMP ?></div>
            </div>
        </li>

        <li class="mb-10 ms-6">
            <span
                class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                <img class="rounded-full shadow-lg" src="img/profile.png" alt="Thomas Lean image" />
            </span>
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                <div class="items-center justify-between mb-3 sm:flex">
                    <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0"><?= $tahunSMK ?></time>
                    <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Sekolah Menengah Atas
                        (SMA) atau Sekolah Menengah Kejuruan (SMK)
                        <a href="<?= $linkSMK ?>"
                            class="font-semibold text-gray-900 dark:text-white hover:underline"><?= $SMK ?></a>
                    </div>
                </div>
                <div
                    class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">
                    <?= $desSMK ?></div>
            </div>
        </li>

        <li class="mb-10 ms-6">
            <span
                class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                <img class="rounded-full shadow-lg" src="img/profile.png" alt="Thomas Lean image" />
            </span>
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                <div class="items-center justify-between mb-3 sm:flex">
                    <time
                        class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0"><?= $tahunKuliah ?></time>
                    <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Pendidikan Tinggi
                        (Kuliah)
                        <a href="<?= $linkKuliah ?>"
                            class="font-semibold text-gray-900 dark:text-white hover:underline"><?= $Kuliah ?></a>
                    </div>
                </div>
                <div
                    class="p-3 text-xs italic font-normal text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">
                    <?= $desKuliah ?></div>
            </div>
        </li>
    </ol>



</div>