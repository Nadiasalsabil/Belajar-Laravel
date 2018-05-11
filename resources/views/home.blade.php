@extends('template')
@section('contentWebsite')
<div class="jumbotron">
	<div class="container">
		<h1>Selamat Datang di Website Pencari Kerja </h1>
		<p> Mencari kerja tidaklah susah, kami siap membantu anda mendapatkan pekerjaan caranya mudah sekali dengan menekan tombol daftar kerja, maka data diri anda akan kami promosikan untuk mendapatkan pekerjaan sesuai dengan yang anda inginkan. </p>
		<p> 
			<a class="btn btn-success btn-lg" href="{{ url("index.php/daftar") }}" role="button"><i class="glyphicon glyphicon-briefcase"></i>Lihat Pendaftar Kerja</a>

		</p>
	</div>
</div>

<div class="container">
	<h3> Random Pendaftar Kerja </h3>
	<hr>
	<div class="row">

		@foreach($pendaftar as $pencari)

		<div class="col-md-6">
			<table class="well table table-bordered">
				<tbody>
					<tr>
						<td width="100">Nama</td>
						<td width="1">:</td>
						<td> {{ $pencari->nama }} </td>
					</tr>
					<tr>
						<td> Email </td>
						<td width="1">:</td>
						<td>{{ $pencari->email }}</td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td width="1">:</td>
						<td>{{ $pencari->pekerjaan }}</td>
					</tr>
					<tr>
						<td colspan="3">
							<a href="{{ url ("pendaftarkerja/detail/".$pencari->id) }}" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-search"></i>Detail Pekerja</a></td>
						</tr>
					</tbody>
				</table>
			</div>

			@endforeach
</div>
<a class="btn btn-primary" href="{{ url ("pendaftarkerja") }}">
	<i class="glyphicon glyphicon-tasks"></i>
Tampilkan semua</a>
</div>
@endsection