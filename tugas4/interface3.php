<?php
 interface Peserta {
 public function dataDiri();
 public function dataOrtu();
 public function dataSekolahAsal();
 }
 class Siswa implements Peserta {
 public string $nama = "Wynne";
 public function dataDiri() {
 return $this->nama;
 }

 public function dataOrtu() {
 //
 }

 public function dataSekolahAsal() {
 //
 }
}
 class Mahasiswa implements Peserta {
 public string $nama = "Yuniar";
 public function dataDiri() {
 return $this->nama;
 }
 public function dataOrtu() {
//
 }
public function dataSekolahAsal() {
 //
 }
 }
 $ssw = new Siswa;
 echo "<p>" . $ssw->dataDiri() . "</p>";
$mhsw = new Mahasiswa;
echo "<p>" . $mhsw->dataDiri() . "</p>";