<div class="container flex justify-center items-center h-screen">
    <div
        class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mr-5">
        <form class="space-y-6" action="index.php?hal=galeri" method="POST">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Form Belanja</h5>
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Pelanggan</label>
                <input type="text" name="nama" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="masukkan nama" required />
            </div>

            <div>
                <label for="barang" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Pilih
                    Barang</label>
                <select id="barang" name="barang"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>silahkan pilih Barang</option>
                    <option value="SAMSUNG TV 50 Crystal UHD CU8000 4K Smart TV">SAMSUNG TV 50"</option>
                    <option value="SAMSUNG GALAXY S24 ULTRA">SAMSUNG GALAXY S24 ULTRA</option>
                    <option value="Samsung Galaxy Watch5 Pro 45mm">Samsung Galaxy Watch5 Pro 45mm</option>
                    <option value="VR5000RM Robot Vacuum Cleaner">VR5000RM Robot Vacuum Cleaner</option>
                    <option value="Samsung AC WindFree™ Ultra - 1PKum Cleaner">Samsung AC WindFree™ Ultra - 1PK
                    </option>
                </select>

            </div>

            <div>
                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                    Barang</label>
                <input type="text" name="jumlah" id="jumlah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="masukkan jumlah barang" required />
            </div>


            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Beli</button>

        </form>
    </div>
    <div
        class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Harga Barang</h5>
            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                View all
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                <li class="py-3 sm:py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="img/tv.png" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                SAMSUNG TV 50"
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">Crystal UHD CU8000 4K
                                Smart TV
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp.6.500.000
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center ">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="img/samsungs24ultra.png" alt="Bonnie image">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                HP SAMSUNG
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                SAMSUNG GALAXY S24 ULTRA
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp.22.000.000
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="img/jam.png" alt="Michael image">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                GALAXY WATCH
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Samsung Galaxy Watch5 Pro 45mm
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp.5.000.000
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center ">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="img/vacuum.png" alt="Lana image">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                VACUUM ROBOT
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                VR5000RM Robot Vacuum Cleaner
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp.4.500.000
                        </div>
                    </div>
                </li>
                <li class="pt-3 pb-0 sm:pt-4">
                    <div class="flex items-center ">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="img/ac.png" alt="Thomas image">
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                SAMSUNG AC
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Samsung AC WindFree™ Ultra - 1PK
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp.10.000.000
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>