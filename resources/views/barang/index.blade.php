@extends('layout/layout')

@section('isi')
	<center><h1>Barang</h1></center>
	<a href="/barang/create">Tambah</a>
	<table>
		<tr>
			<th>#ID</th>
			<th>#ID Category</th>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Stok</th>
			<th>Gambar</th>
			<th>Created_by</th>
			<th>Updated_by</th>
			<th>Created_at</th>
			<th>Updated_at</th>
			<th>aksi</th>
		</tr>
		@foreach($barangs as $barang)
			<tr>
				<td>{{ $barang->id }}</td>
				<td>{{ $barang->id_category }}</td>
				<td>{{ $barang->nama }}</td>
				<td>{{ $barang->deskripsi }}</td>
				<td>{{ $barang->stok }}</td>
				<td>{{ $barang->gambar }}</td>
				<td>{{ $barang->created_by }}</td>
				<td>{{ $barang->updated_by }}</td>
				<td>{{ $barang->created_at }}</td>
				<td>{{ $barang->updated_at }}</td>
				<td>
					<form method="get" action="/barang/edit/{{ $barang->id }}">
						{{ csrf_field() }}
						<button>edit</button>
					</form>
					<br>
					<form method="post" action="/barang/destroy/{{ $barang->id }}">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="delete">
						<button>destroy</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection
