@extends('backend.layout.app')
@section('title', 'Dashboard')
@section('admin-user-active', 'mm-active')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-user icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                Admin User
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered Datatables">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.Datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/admin/admin-user/datatable/ssd',
            columns:[
                {
                    data: "name",
                    name: "name"
                },
                {
                    data: "email",
                    name: "email"
                },
                {
                    data: "phone",
                    name: "phone"
                },
            ]
        });
    })
</script>
@endsection