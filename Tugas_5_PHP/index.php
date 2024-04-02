<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Nilai Ujian Mahasiswa</title>
</head>

<body>
    <div class="container flex justify-center items-center h-screen">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mr-5">
            <form class="space-y-6" action="tabelSiswa.php" method="POST">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Form Nilai Ujian</h5>
                <div>
                    <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                    <input type="text" name="nim" id="nim"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="masukkan nim" required />
                </div>

                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="masukkan nama" required />
                </div>

                <div>
                    <label for="kampus" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Asal
                        Kampus</label>
                    <select id="kampus" name="kampus"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>silahkan pilih kampus</option>
                        <option value="Universitas Indonesia">Universitas Indonesia</option>
                        <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                        <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                        <option value="Universitas Airlangga">Universitas Airlangga</option>
                        <option value="Universitas Padjadjaran">Universitas Padjadjaran</option>
                    </select>
                </div>

                <div>
                    <label for="matkul" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Mata
                        Kuliah</label>
                    <select id="matkul" name="matkul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>silahkan pilih matakuliah</option>
                        <option value="Pemrograman Web Lanjut">Pemrograman Web Lanjut</option>
                        <option value="Desain Web Responsif">Desain Web Responsif</option>
                        <option value="Pengembangan Aplikasi Web">Pengembangan Aplikasi Web</option>
                        <option value="Keamanan Web">Keamanan Web</option>
                        <option value="Pemrograman PHP">Pemrograman PHP</option>
                    </select>
                </div>


                <div>
                    <label for="nilai"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai</label>
                    <input type="text" name="nilai" id="nilai"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="masukkan nilai" required />
                </div>


                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Kirim</button>


        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>