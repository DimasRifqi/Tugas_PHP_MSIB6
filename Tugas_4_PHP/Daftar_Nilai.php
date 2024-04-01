<?php 

    $DaftarJudul = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat', 'Action'];

    $SiswaA1 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Rudi', 'NIM'=>'7577', 'Nilai'=>80];
    $SiswaA2 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Syeila', 'NIM'=>'8597', 'Nilai'=>88];
    $SiswaA3 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Arthur', 'NIM'=>'2277', 'Nilai'=>83];
    $SiswaA4 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Gideon', 'NIM'=>'3689', 'Nilai'=>57];
    $SiswaA5 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Hime', 'NIM'=>'9977', 'Nilai'=>85];
    $SiswaA6 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Satoshi', 'NIM'=>'3321', 'Nilai'=>77];
    $SiswaA7 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Ayumi', 'NIM'=>'7734', 'Nilai'=>55];
    $SiswaA8 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Tetsuya', 'NIM'=>'8287', 'Nilai'=>58];
    $SiswaA9 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Robin', 'NIM'=>'7577', 'Nilai'=>80];
    $SiswaA10 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Asami', 'NIM'=>'7577', 'Nilai'=>82];
    $SiswaA11 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Maya', 'NIM'=>'1234', 'Nilai'=>79];
    $SiswaA12 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Rizal', 'NIM'=>'4321', 'Nilai'=>70];
    $SiswaA13 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Ayu', 'NIM'=>'5678', 'Nilai'=>65];
    $SiswaA14 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Eka', 'NIM'=>'8765', 'Nilai'=>73];
    $SiswaA15 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Lia', 'NIM'=>'3456', 'Nilai'=>68];
    $SiswaA16 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Faisal', 'NIM'=>'6543', 'Nilai'=>72];
    $SiswaA17 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Sari', 'NIM'=>'9876', 'Nilai'=>63];
    $SiswaA18 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Budi', 'NIM'=>'6789', 'Nilai'=>77];
    $SiswaA19 = ['Foto'=>'img/laki.jpeg','Nama Mahasiswa'=>'Dito', 'NIM'=>'7890', 'Nilai'=>60];
    $SiswaA20 = ['Foto'=>'img/perempuan.jpeg','Nama Mahasiswa'=>'Rina', 'NIM'=>'8901', 'Nilai'=>75];

    $dataMahasiswa = [
        $SiswaA1, $SiswaA2, $SiswaA3, $SiswaA4, $SiswaA5, $SiswaA6, $SiswaA7, $SiswaA8, $SiswaA9, $SiswaA10,
        $SiswaA11, $SiswaA12, $SiswaA13, $SiswaA14, $SiswaA15, $SiswaA16, $SiswaA17, $SiswaA18, $SiswaA19, $SiswaA20
    ];
    
    $jumlah_nilai = array_column($dataMahasiswa,'Nilai');
    
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $jumlah_mahasiswa = count($dataMahasiswa);
    $nilai_total = array_sum($jumlah_nilai);
    $nilai_rata2 = $nilai_total / $jumlah_mahasiswa;

    $info_keterangan = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata-Rata' => $nilai_rata2,
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Jumlah Keseluruhan Nilai' => $nilai_total,
    ];
    
    
    
    
?>

<br>
<br>
<h1
    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white text-center mt-10">
    Daftar Nilai <span
        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Mahasiswa</span>
</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div
        class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
        <div>
            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                type="button">
                <span class="sr-only">Action button</span>
                Action
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownAction"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                            account</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                        User</a>
                </div>
            </div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search"
                class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="masukkan nama untuk mencari">
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <?php 
                    foreach($DaftarJudul as $judul){?>
                <th scope="col" class="px-6 py-3">
                    <?=$judul ?>
                </th>
                <?php } ?>

            </tr>
        </thead>
        <tbody>
            <?php 
                    $no=1;
                    foreach($dataMahasiswa as $Data){
                        
                    $red = "bg-red-500";
                    $green = "bg-green-500";
                    $keterangan = ($Data['Nilai'] >= 65 ) ? "Lulus" : "Gagal"; 
                    $BG_Keterangan = ($keterangan =="Lulus") ? $green : $red; 
                           
                    if($Data['Nilai'] >=80 && $Data['Nilai'] <=100){
                        $grade = "A";
                    }else if($Data['Nilai'] >=70 && $Data['Nilai'] <=79){
                        $grade = "B";
                    }else if($Data['Nilai'] >=65 && $Data['Nilai'] <=69){
                        $grade = "C";
                    }else if($Data['Nilai'] >=50 && $Data['Nilai'] <=64){
                        $grade = "D";
                    }else if($Data['Nilai'] >=0 && $Data['Nilai'] <=49){
                        $grade = "E";
                    }else{
                        $grade = "Anda Belum Ujian";
                    }

                    switch($grade){
                        case "A":
                            $predikat = "Memuaskan";
                            break;
                        case "B":
                            $predikat = "Bagus";
                            break;
                        case "C":
                            $predikat = "Cukup";
                            break;
                        case "D":
                            $predikat = "Kurang";
                            break;
                        case "E":
                            $predikat = "Buruk";
                            break;
                            
                        default:
                            $predikat = "Anda Belum Ujian";
                    }
                    
                    // $bruto = $buah['harga'] * $buah['jumlah'];   
                    // $harga_diskon = $diskon * $bruto;
                    // $harga_bayar = $bruto - $harga_diskon;
                ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th class="px-6 py-4">
                    <?= $no++ ?>
                </th>

                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-10 h-10 rounded-full" src="<?= $Data['Foto'] ?>" alt="Foto Mahasiswa">
                    <div class="ps-3">
                        <div class="text-base font-semibold"><?= $Data['Nama Mahasiswa'] ?></div>
                        <div class="font-normal text-gray-500"><?= $Data['Nama Mahasiswa']."@gmail.com" ?></div>
                    </div>

                </th>
                <td class="px-6 py-4">
                    <?= $Data['NIM'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $Data['Nilai'] ?>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full <?= $BG_Keterangan?> me-2"></div> <?= $keterangan ?>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <?= $grade ?>
                </td>
                <td class="px-6 py-4">
                    <?= $predikat ?>
                </td>
                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                </td>
            </tr>
            <?php } ?>


        </tbody>
        <tfoot class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <?php 
                foreach($info_keterangan as $ket => $hasil){ ?>
            <tr>
                <th class="px-6 py-4 text-right" colspan="4"><?= $ket ?></th>
                <th class="px-6 py-4 text-center fw-bold" colspan="5"><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>


    </table>
    <!-- Edit user modal -->
    <div id="editUserModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit user
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="editUserModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                Name</label>
                            <input type="text" name="first-name" id="first-name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Bonnie" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                Name</label>
                            <input type="text" name="last-name" id="last-name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Green" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="example@company.com" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone-number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                Number</label>
                            <input type="number" name="phone-number" id="phone-number"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="e.g. +(12)3456 789" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="department"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                            <input type="text" name="department" id="department"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Development" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <input type="number" name="company" id="company"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="123456" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="current-password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                Password</label>
                            <input type="password" name="current-password" id="current-password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="••••••••" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="new-password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                Password</label>
                            <input type="password" name="new-password" id="new-password"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="••••••••" required="">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                        all</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
const searchInput = document.getElementById('table-search');
const rows = document.querySelectorAll('tbody tr');

searchInput.addEventListener('input', function(event) {
    const searchTerm = event.target.value.toLowerCase();

    rows.forEach(row => {
        const nameColumn = row.querySelector('th[scope="row"] .font-semibold').textContent
            .toLowerCase();

        if (nameColumn.includes(searchTerm)) {
            row.style.display = 'table-row';
        } else {
            row.style.display = 'none';
        }
    });
});
</script>