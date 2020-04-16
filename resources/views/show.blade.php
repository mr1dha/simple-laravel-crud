@extends('layout')

@section('title', $prodi)

@section('content')

	<h2>Daftar Mahasiswa {{$prodi}} 2019</h2>
	<a href="<?='../../tambah/'.$prodi  ?>" class="btn btn-primary float-right">Tmbah Data Mahasiswa</a> 
		<div class="float-left">
			{{ $mahasiswa->links() }}
		</div>
		    <table class="table mt-3">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">No Ujian</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Kelamin</th>
		      <th scope="col">Jenjang</th>
		      <th scope="col">Fakultas</th>
		      <th scope="col">Prodi</th>
		      <th scope="col">Jalur Masuk</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($mahasiswa as $i => $mhs)
		    <tr>
		      <th scope="row">{{++$i}}</th>
		      <td>{{$mhs->no_ujian}}</td>
		      <td>{{$mhs->nama}}</td>
		      <td>{{$mhs->kelamin}}</td>
		      <td>{{$mhs->jenjang}}</td>
		      <td>{{$mhs->jenjang}}</td>
		      <td>{{$mhs->fakultas}}</td>
		      <td>{{$mhs->jalur_masuk}}</td>
		      <td>
		      	<a href="<?= "../../edit/".$prodi."/".$mhs->no_ujian;  ?>" class="badge badge-success p-1">edit</a>
		      	<a href="<?= "../../hapus/".$prodi."/".$mhs->no_ujian;  ?>" class="badge badge-danger p-1">hapus</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
@endsection