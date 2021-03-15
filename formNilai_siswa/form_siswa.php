<!DOCTYPE html>
<html>
<head>
	<title>Form Input Nilai Siswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="bg-dark p-4">
	<h5 class="mt-2 text-light bg-dark">Sistem Penilaian</h5>
</div>
<div class="mx-4">
	<hr class="mb-0 mt-0">
</div>
<legend>Form Nilai Siswa</legend>
<hr class="mb-2 mt-0">
<form class="form-horizontal" method="GET" action="siswa_nilai.php">
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" name="nim" class="form-control" id="inputPassword">
    </div>
  </div>
          <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Mata Kuliah </label>
            <div class="col-sm-10">
            <select class="form-select mb-2" name="matkul" aria-label="Default select example">
            <option selected>Pilih</option>
            <option value="UI/UX">UI/UX</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Statistik">Statistik</option>
            <option value="KK">KK</option>
            <option value="PPKn">PPKn</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            </select>
        </div>
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nilai UTS</label>
    <div class="col-sm-10">
      <input type="text" name="nilai_uts" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nilai UAS</label>
    <div class="col-sm-10">
      <input type="text" name="nilai_uas" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nilai Tugas/Praktikum</label>
    <div class="col-sm-10">
      <input type="text" name="nilai_tugas" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <input type="submit" value="Simpan" name="proses" class="btn btn-primary"/>
        </div>
</form>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>