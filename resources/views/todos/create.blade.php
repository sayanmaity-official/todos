@extends('layout')

@section('content')
<div class="container-fluid d-flex align-items-center">
    <div class="card col-md-8" style="background-color:#fff0;">
        <h3 class="text-center">Add New Todo</h3>
        
                        
        
        
        
        <form action="\todos" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Todo Name:</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter Todo name"
                    name="name"
                />
            </div>
            <div class="form-group">
                <label for="todoDescription">Enter Description:</label>
                <textarea
                    class="form-control"
                    id="todoDescription"
                    rows="3"
                    name="description"
                ></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form> 
    </div>
</div>
@endsection