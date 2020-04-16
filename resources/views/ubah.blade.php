@extends('master')

@section('title', 'Edit | '.$mahasiswa->no_ujian)

@section('content')

		<h1>Edit Data Mahasiswa {{$mahasiswa->no_ujian}}</h1>
	<div class="row">
		<div class="col-lg-6">
			<form action="/ubah/{{$mahasiswa->prodi}}/{{$mahasiswa->no_ujian}}"  method="post">
			@csrf

			  <div class="form-group">
			    <h5 >Nomor Ujian</h5>
			    <input value="{{$mahasiswa->no_ujian}}" type="text" class="form-control" name="no_ujian" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Nama</h5>
			    <input value="{{$mahasiswa->nama}}" type="text" class="form-control" name="nama" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Kelamin (L/P)</h5>
			    <input value="{{$mahasiswa->kelamin}}" type="text" class="form-control" name="kelamin" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Jenjang</h5>
			    <input value="{{$mahasiswa->jenjang}}" type="text" class="form-control" name="jenjang" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Fakultas</h5>
			    <input value="{{$mahasiswa->fakultas}}" type="text" class="form-control" name="fakultas" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Prodi</h5>
			    <input value="{{$mahasiswa->prodi}}" type="text" class="form-control" name="prodi" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Jalur Masuk</h5>
			    <input value="{{$mahasiswa->jalur_masuk}}" type="text" class="form-control" name="jalur_masuk" aria-describedby="emailHelp">
			  </div>

			  <button type="submit" class="btn btn-primary">Ubah Data</button>
			</form>
		</div>
	</div>

@endsection