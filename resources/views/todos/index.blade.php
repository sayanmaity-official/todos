@extends ('layout')

@section('content')
        <div class="container-fluid d-flex align-items-center">
            
            <div class="card col-md-8" style="background-color:#fff0;">
                    <h3 class="text-center">TODO Page</h3>
                    <div class="card-header d-flex justify-content-between align-items-center" >
                        <div class="header-status">

                            <h3>My Todo List</h3>
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active <span>{{ count($todos) }}</span> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Completed</a>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-success">
                            <a href="./todos/create" style="text-decoration: none; color: #fff"> Add </a>
                        </button>
                        
                    </div>
                    <ul class="list-group" style="height:32vh;overflow:scroll" >
                        @foreach($todos as $todo)
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center"
                        >
                            <div class="text">{{$todo->name}}</div>
                            <div
                                class="action d-flex justify-content-between align-items-center"
                            >
                                <input
                                    type="checkbox"
                                    aria-label="Checkbox for
                                    following text input"
                                    class="mr-2"
                                    {{ $todo->completed ? 'checked' : ''}} />
                                <button type="button" class="btn btn-primary btn-sm mr-2" >
                                    View Desc
                                </button>

                                <button type="button" class="btn btn-danger btn-sm" aria-label="Close" >
                                    <a
                                        href="./todos/{{ $todo->id }}/delete"
                                        style="
                                            text-decoration: none;
                                            color: #fff;
                                        "
                                    >
                                        <span aria-hidden="true"
                                            >&times;</span
                                        ></a
                                    >
                                </button>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            
        </div>
@endsection