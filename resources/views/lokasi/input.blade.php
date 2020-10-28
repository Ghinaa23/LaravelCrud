<body>
<div class="row mt-3">
    <div class="container mt-3">
    <h1>Tambah Data</h1>
    <hr>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        <form action="/lokasi/input" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="cita_cita">Cita-cita</label>
                <input type="text" class="form-control" name="cita_cita" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <input type="submit" class="btn btn-info" value="Simpan Data ">
        </hr>
    </div>
</div>
</form>
</body>
