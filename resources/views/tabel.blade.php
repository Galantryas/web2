@extends('base')
@section('content')
    <!-- Main Section -->
	<style>
		table, th, td {
		border: 1px solid grey;
		
	}
	th{
		padding-left : 15px;
	}
	h1{
		padding-bottom :30px;
	}
	</style>
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Mahasiswa</h1>
        </div>
        <!-- /.content -->
		<div>
			<table style="width:96%" align="center">
		  <tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No.HP</th>
			<th>Alamat</th>
			<th>Aksi</th>
		  </tr>
		</table>
		</div>
    </section>
    <!-- /.main-section -->

@endsection