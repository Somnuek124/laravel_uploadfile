@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        @if (Auth::check())
            <div class="card-header">Tasks List</div>
            <div class="card-body">
                <a href="/task" class="btn btn-primary">Add new Task</a>
                <table class="table mt-4">
                    <thead><tr>
                        <th colspan="2">Tasks</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user->tasks as $task)
                    <tr>
                        <td>
                            {{$task->description}}
                        </td>
                        <td>
                            
                            <form action="/task/{{$task->id}}">
                                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
                </tbody>
                </table>
            </div>
        @else
            <div class="card-body">
                <h3>You need to log in. <a href="/login">Click here to login</a></h3>
            </div></div>

            <div class="container">
                <div class="row justify-content-center">
                @foreach($data as $row)
                <div class="modal-sp">
                    <div> <img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75%" /> </div>
                    <div style="color:black"><strong>{{ $row->p_name }}</strong>  </div>	
                    <div style="color:red"> {{ $row->p_price }} บาท</div>	
                        <div class="form-group text-center">
                        <input type="submit" name="Add" class="btn btn-primary" value="เพิ่มลงตะกร้า" />
                       </div>
                </div>
                @endforeach
            </div>
            </div>

        @endif
    </div>                         
</div>
@endsection