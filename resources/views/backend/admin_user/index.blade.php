@extends('backend.layout.app')
@section('title', 'Admin User')
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
                Admin Users
            </div>
        </div>
    </div>
</div>

<div class="py-3">
    <a href="{{route('admin.admin-user.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Add Admin User</a>
</div>
<div class="content">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered Datatables">
                <thead>
                    <tr class="bg-light">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    </tr>
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
                {
                    data: "created_at",
                    name: "created_at"
                },
                {
                    data: "updated_at",
                    name: "updated_at"
                }
            ]
        });
    })
</script>
@endsection