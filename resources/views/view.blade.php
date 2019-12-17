@extends('layouts.app')
@section('content')

<div class="container">
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View') }}</div>
                <div class="card-body">
                    <div class="jumbotron text-center">
                    <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
                    <p>Product Name - {{ $data->p_name }} </p>
                    <p>Product Price - {{ $data->p_price }}</p>
                    <p>Quantity - {{ $data->qty }}</p>
                    <p>Detail - {{ $data->detail }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection