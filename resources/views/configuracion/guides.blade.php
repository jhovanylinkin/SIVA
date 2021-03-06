@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col s12 m10 offset-m1">
			<table class="responsive-table" id="admonGuidesTable">
				<thead>
					<tr>
						<th style="display:none;">id</th>
						<th>Titulo</th>
						<th>Descripcion</th>
						<th>Nombre</th>
						<th>Desargar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($newFiles as $newFile)
						<tr>
							<td style="display:none;">{{$newFile->id_documento}}</td>
							<td>{{ $newFile->titulo }}</td>
								<td>{{ $newFile->descripcion }}</td>
								<td>{{ $newFile->nombre_archivo }}</td>
								<td><a href="/guides/download/{{$newFile->nombre_archivo}}"><i class="material-icons">file_download</i></a></td>
								<td><a href="" id="deleteGuide"><i class="material-icons delete_file">delete</i></a></td>
							</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="fixed-action-btn">
			<a href="/admin/configuracion/admonguides/upfile" class="btn-floating pulse btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
		</div>
</div>
@endsection
@section('content_js')
<script src="{{asset('js/delete_handbooks.js')}}"></script>
@endsection