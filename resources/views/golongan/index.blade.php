@extends('layouts.app')

@section('content')
<center><h1>Golongan</h1></center>
<a  href="{{url('golongan/create')}}" class="btn btn-primary form-control">Tambah</a>
<br>
<br>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-info">
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besaran Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
					<a href="{{route('golongan.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
@endsection