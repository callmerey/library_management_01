@extends('Layout.blank_admin');

@section('main')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{__('message.book_list')}}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="float: left;">{{__('message.data_table')}}</h6>
            <a style="float: right" href="{{route('book.create')}}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">{{__('message.add_new')}}</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @include('Admin.BookPage.Elements.search_book_form')
                @include('Admin.BookPage.Elements.message')
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{__('message.id')}}</th>
                            <th>{{__('message.book_name')}}</th>
                            <th>{{__('message.quantity')}}</th>
                            <th>{{__('message.price')}}</th>
                            <th>{{__('message.publisher_name')}}</th>
                            <th>{{__('message.category_name')}}</th>
                            <th>{{__('message.author_name')}}</th>
                            <th>{{__('message.user_image')}}</th>
                            <th>{{__('message.action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('Admin.BookPage.Elements.list_book')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{route('book.export')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50">  </i>
            {{__('message.export_excel')}}
        </a>
    </div>
</div>
<!-- /.container-fluid -->
<form method="POST" action="" id="form-delete">
    @csrf @method('DELETE')
</form> 
@stop