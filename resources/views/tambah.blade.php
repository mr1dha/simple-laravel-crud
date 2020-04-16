@extends('layout')

@section('title', 'Tambah | '.$prodi)

@section('content')

	<div class="row" >
			<h1>Tambah Data Mahasiswa {{$prodi}}</h1>
		<div class="col-lg-6">
			<form action="/tambah/{{$prodi}}"  method="post">
			{{ csrf_field() }}

			  <div class="form-group">
			    <h5 >Nomor Ujian</h5>
			    <input  type="text" class="form-control" name="no_ujian" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Nama</h5>
			    <input  type="text" class="form-control" name="nama" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Kelamin (L/P)</h5>
			    <input  type="text" class="form-control" name="kelamin" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Jenjang</h5>
			    <input  type="text" class="form-control" name="jenjang" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Fakultas</h5>
			    <input  type="text" class="form-control" name="fakultas" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Prodi</h5>
			    <input  type="text" class="form-control" name="prodi" aria-describedby="emailHelp">
			  </div>

			  <div class="form-group">
			    <h5 >Jalur Masuk</h5>
			    <input  type="text" class="form-control" name="jalur_masuk" aria-describedby="emailHelp">
			  </div>

			  <button type="submit" class="btn btn-primary">Tambah Data</button>
			</form>
		</div>
	</div>

@endsection