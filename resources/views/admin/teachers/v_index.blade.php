@extends('layout.v_template')
@section('title', 'Teachers Page')
@section('content')
<section class="section">
	<div class="section-header">
		<h1>Teachers</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="/home">Home</a></div>
			<div class="breadcrumb-item">Teachers</div>
		</div>
	</div>
	<div class="row">
		@if(session('message'))
		<div class="col-md-12">
			<div class="alert alert-success">{{session('message')}}</div>
		</div>
		@endif
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="white-space: nowrap;">
					<a href="/teachers/create" class="btn btn-primary" style="border-radius: 5px; margin-right: 5px;"><i class="fas fa-plus"></i></a>
					<a href="/teachers/print" target="_blank" class="btn btn-dark" style="border-radius: 5px; margin-left: 5px;"><i class="fas fa-print"></i></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped data-tables">
							<thead>
								<tr>
									<th>Number</th>
									<th>NIP</th>
									<th>Name</th>
									<th>Phone Number</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@foreach($teachers as $data)
								<tr>
									<td>{{$no++}}</td>
									<td>{{$data->nip}}</td>
									<td>{{$data->name}}</td>
									<td>{{$data->phone_number}}</td>
									<td>
										<a href="/teachers/show/{{$data->id_teachers}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
										<a href="/teachers/edit/{{$data->id_teachers}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
										<a href="/teachers/delete/{{$data->id_teachers}}" onclick="return confirm('Are you sure you want to delete the data?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
									</td>
								</tr>
								@endforeach()
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()