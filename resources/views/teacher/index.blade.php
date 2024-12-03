@extends('layouts.admin')

@section('main-content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Teachers</h1>
    <p class="mb-4">Example table integrated with DataTables (Vanilla JS).</p>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Teacher List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($teachers as $teacher) --}}
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->subject }}</td> --}}
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-primary btn-sm">View</button>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi DataTables
        const table = document.getElementById("dataTable");
        new DataTable(table, {
            searchable: true,
            fixedHeight: true,
            perPage: 10,
            labels: {
                placeholder: "Search...", // Placeholder for search box
                perPage: "{select} entries per page", // Label for per-page dropdown
                noRows: "No data found", // Message for no results
                info: "Showing {start} to {end} of {rows} entries", // Info text
            },
        });
    });
</script>
@endsection
