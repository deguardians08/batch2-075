@extends('layout/layout')

@section('isi')
	<form method="post" action='/barang/update'>
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put">
		<input name="id" placeholder="#ID" value='{{ $barang->id }}' readonly><br>
		<input name="kode" placeholder="Kode" value='{{ $barang->kode }}'><br>
		<input name="nama" placeholder="nama" value='{{ $barang->nama }}'><br>
		<input type="submit" name="submit" value="perbarui">
	</form>
@endsection
