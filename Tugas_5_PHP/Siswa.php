<?php 
    class Siswa{
        public $nama;
        public $nilai;
        public $matkul;
        public $kampus;
        public $nim;

        public function __construct($nama, $nilai, $matkul, $kampus, $nim){
            $this->nama = $nama;
            $this->nilai = $nilai;
            $this->matkul = $matkul;
            $this->kampus = $kampus;
            $this->nim = $nim;
        }

        public function getGrade(){
            if($this -> nilai >= 85 ){
                $grade = 'A';
            }else if($this -> nilai >= 75){
                $grade = 'B';
            }else if($this -> nilai >= 60){
                $grade = 'C';
            }else if($this -> nilai >= 40){
                $grade = 'D';
            }else{
                $grade = 'E';
            }

            return $grade;
        }

        public function getPredikat($grade){
            switch($grade){
                case "A":
                    $predikat = "Sangat Memuaskan";
                    break;
                case "B":
                    $predikat = "Memuaskan";
                    break;
                case "C":
                    $predikat = "Cukup";
                    break;
                case "D":
                    $predikat = "Kurang";
                    break;
                case "E":
                    $predikat = "Sangat Kurang";
                    break;
                    
                default:
                    $predikat = "Anda Belum Ujian";
            }

            return $predikat;
        }

        public function getHasil(){
            return ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
        }

        public function getBGHasil(){
            $red = "bg-red-500";
            $green = "bg-green-500";
            return ($this->getHasil() == "Lulus") ? $green : $red; 
        }
        


       
    }


?>