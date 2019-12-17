@extends('layouts.app')
@section('content')

<div class="container">
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
    </div>
    <br />
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
     <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group row">
       <label class="col-md-4 text-right">Product Name</label>
       <div class="col-md-8">
        <input type="text" name="p_name" value="{{ $data->p_name }}" class="form-control input-lg" />
       </div>
      </div>

      <div class="form-group row">
       <label class="col-md-4 text-right">Product Price</label>
       <div class="col-md-8">
        <input type="text" name="p_price" value="{{ $data->p_price }}" class="form-control input-lg" />
       </div>
      </div>

      <div class="form-group row">
        <label class="col-md-4 text-right">Quantity</label>
        <div class="col-md-8">
         <input type="text" name="qty" value="{{ $data->qty }}" class="form-control input-lg" />
        </div>
       </div>

       <div class="form-group row">
        <label class="col-md-4 text-right">Detail</label>
        <div class="col-md-8">
         <input type="text" name="detail" value="{{ $data->detail }}" class="form-control input-lg" />
        </div>
       </div>

    
      <div class="form-group row">
       <label class="col-md-4 text-right">Select Product Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>
    
            </div>
        </div>
        </div>
    </div>
</div>
@endsection