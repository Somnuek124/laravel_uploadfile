@extends('layouts.app')
@section('content')

<div class="container">

	<div align="right">
		<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add Product</a>
	</div>
	<br />
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron text-center">

<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="15%">ProductName</th>
		<th width="15%">ProductPrice</th>
		<th width="10%">Quantity</th>
		<th width="20%">Detail</th>
		<th width="40%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->p_name }}</td>
			<td>{{ $row->p_price }}</td>
			<td>{{ $row->qty }}</td>
			<td>{{ $row->detail }}</td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
</div>
</div>
</div>
</div>
{!! $data->links() !!}
@endsection
