@extends('layouts.app')
@section('content')

<div class="container">
    <div align="right">
        <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
       </div>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create') }}</div>
            <div class="card-body">
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif


<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right">Product Name</label>
  <div class="col-md-8">
   <input type="text" name="p_name" class="form-control input-lg"  />
  </div>
 </div>


 <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right">Product Price</label>
  <div class="col-md-8">
   <input type="text" name="p_price" class="form-control input-lg"  />
  </div>
 </div>


 <div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Quantity</label>
    <div class="col-md-8">
     <input type="text" name="qty" class="form-control input-lg"  />
    </div>
   </div>

<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Detail</label>
    <div class="col-md-8">
     <input type="text" name="detail" class="form-control input-lg"  />
    </div>
   </div>

 
 
 <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right">Select Product Image</label>
  <div class="col-md-8">
   <input type="file" name="image" />
  </div>
 </div>
 
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary" value="Add" />
 </div>

</form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection