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
                    <h1>Employees <small class="text-muted">Showing All Employees</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('admin.employees.create') }}">Create Employee</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->

                 @if ($allEmployees->count())
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                              <th>Customers</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allEmployees as $Employee)
                                <tr>
                                    <td>{{ $Employee->name }}</td>
                                    <td>{{ $Employee->email }}</td>
                                    <td><select class="js-states browser-default select2" name="shopping_id" required id="shopping_id">
                                        <option value="option_select" disabled selected>Customers</option>
                                        @foreach($allCustomers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name}}</option>
                                        @endforeach
                                    </select></td>
                                    @endforeach





                                </tr>

                        </tbody>
                    </table>
                @endif


    </div>
@endsection
