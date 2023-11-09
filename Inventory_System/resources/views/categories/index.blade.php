@extends('layouts.master')

@section('top')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">List of Categories</h3>
            <button type="button" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-success pull-right" style="margin-top: -8px;"><i class="fa fa-plus"></i> Add a New Category</button>
        </div>
        <div class="box-body">
            <table id="categories-table" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    @include('categories.form')
@endsection
