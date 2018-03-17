@extends('layout/layout')

@section('isi')
<center>
	<div class="row">
		<div class='col s10 m8 l6 xl4 push-s1 push-m2 push-m3 push-xl4'>
			<form method='post' action='/barang/store'>
				{{ csrf_field() }}
				<div class="card grey lighten-5">
					<div class="card-content">
						<span class="card-title">Tambah Barang</span>
						<div class="row">
							<div class="input-field col s12">
								<select name='id_category' required>
									<option value="">Choose your option</option>
									<option value="">Choose your option</option>
								</select>
								<label>Materialize Select</label>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' data-length='50' id='nama' maxlength='50' name='nama' required>
									<label class='active' for='nama'>Nama Barang</label>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' data-length='50' id='deskripsi' maxlength='50' name='deskripsi' required>
									<label class='active' for='deskripsi'>Deskripsi</label>
								</div>
							</div>
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' data-length='4' id='stok' maxlength='4' name='stok' type='number' required>
									<label class='active' for='stok'>stok</label>
								</div>
							</div>
							<div class='row'>
								<div class="file-field input-field col s12">
									<div class="btn">
										<span>File</span>
										<input type="file" required>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" placeholder="Upload one or more files">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-action">
						<button class='btn light-blue'><i class="material-icons">save</i>Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</center>
<script type="text/javascript">
	$(document).ready(function() {
		$('select').material_select();
		Materialize.updateTextFields();
		$('input, textarea').characterCounter();
	});
</script>
@endsection
