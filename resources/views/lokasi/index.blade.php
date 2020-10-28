    <div class="container mt-3">
    <h1>Data Siswa</h1>
    
        <form class="form-inline" method="GET" action='/input'>
            <div class="row mt-2">
                 <div class="col-md-12">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form> 
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
         
		<table id="tabellokasi" class="table table-striped table-bordered" style="width:100%">
		<thead align="center">
			<tr>
				<th>Nama Siswa</th>
				<th>NIS</th> 
				<th>Kelas</th>
				<th>Cita-cita</th>
				<th>Alamat</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
            @foreach($lokasi as $d)
            <tr class="text-center">
            <td>{{$d->nama}}</td>
            <td>{{$d->nis}}</td>
            <td>{{$d->kelas}}</td>
            <td>{{$d->cita_cita}}</td>
            <td>{{$d->alamat}}</td>
                <td>
                    <a href='/lokasi/{{ $d->id }}' class="btn btn-primary">Edit</a>
                    <a href='/lokasi/delete/{{$d->id}}' class="btn btn-danger">Hapus</a>   
                </td>
            </tr>
             @endforeach
        </tbody>
		</table>
                    <a class="btn btn-info" href="/lokasi/input" role="button">Tambah Data</a>
			</div>
		</div>
	</div>
