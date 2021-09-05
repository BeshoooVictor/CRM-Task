@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Cutomers <small class="text-muted">Showing All Customers</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Create Prospect</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->
                 @if ($prospects->count())
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prospects as $prospect)
                                <tr>
                                    <td>{{ $prospect->name }}</td>
                                    <td>{{ $prospect->email }}</td>
                                    <td><select class="js-states browser-default select2" name="shopping_id" required id="shopping_id">
                                        <option value="option_select" disabled selected>Actions</option>

                                            <option value="1">Visit</option>
                                            <option value="2">Call</option>
                                            <option value="2">Follow Up</option>



                                    </select></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif


    </div>
@endsection
