<?php
$nama_siswa = $_GET['nama'];
$nim = $_GET['nim'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<h3 class="text-light bg-dark p-4">Daftar Nilai Siswa</h3>
<table class="table table-bordered mx-auto"> 
<thead>
<tr>
<th>No</th><th>NIM</th><th>Nama</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr> 
</thead>
<tbody>
<?php
$nomor = 1; 
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nim.'</td>';
echo '<td>'.$nama_siswa.'</td>';
echo '<td>'.$nilai_uts.'</td>';
echo '<td>'.$nilai_uas.'</td>';
echo '<td>'.$nilai_tugas.'</td>';
$nilai_akhir = (30 * $nilai_uts / 100 + 35 * $nilai_uas / 100 + 35 * $nilai_tugas / 100);
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;

?>
</tbody> 
</table>