@extends('master')

@section('title', $prodi)

<style>
	ul.pagination{
		background-color: lightblue !important;   
		border: none;
	}
	li.page-item{
		background-color: lightblue !important;   
		border: none;	
	}
	.table{
		border-color: black;
	}
</style>

@section('content')

	<h1 class="text-center">Mahasiswa {{$prodi}} 2019</h1>
	<hr>
	<a href="<?='../../tambah/'.$prodi  ?>" class="btn btn-dark">(+) Tambah Mahasiswa</a> 
		<div class="float-right">
			{{ $mahasiswa->links() }}
		</div>
		    <table class="table mt-3" style="border-color: black;">
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
		      <td height="5px;">{{$mhs->no_ujian}}</td>
		      <td>{{$mhs->nama}}</td>
		      <td>{{$mhs->kelamin}}</td>
		      <td>{{$mhs->jenjang}}</td>
		      <td>{{$mhs->jenjang}}</td>
		      <td>{{$mhs->fakultas}}</td>
		      <td>{{$mhs->jalur_masuk}}</td>
		      <td>
		      	<a href="<?= "../ubah/".$prodi."/".$mhs->no_ujian;  ?>" class="p-1 text-primary">ubah |</a>
		      	<a href="<?= "../hapus/".$prodi."/".$mhs->no_ujian;  ?>" class="text-danger p-1">hapus</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
@endsection