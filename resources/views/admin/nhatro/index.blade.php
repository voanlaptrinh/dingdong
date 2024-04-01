@extends('admin.index')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb"></ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
                <!-- ============================================================== -->
                <!-- Content page  -->
                <!-- ============================================================== -->

            </div>
            <div class="row">
                <!-- ============================================================== -->
                <!-- data table  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body border-top">
                            <a href="#" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#exampleModal">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Acreage</th>
                                            <th>Price</th>
                                            <th>Floor</th>
                                            <th>Room</th>
                                            <th>Room in Floor</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 1; ?>
                                        @foreach ($nhatros as $nhatro)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{ $nhatro->name }}</td>
                                                <td>{{ $nhatro->acreage }}</td>
                                                <td>{{ $nhatro->price }} vnđ</td>
                                                <td>{{ $nhatro->n_floor }} tầng</td>
                                                <td>{{ $nhatro->n_room }} phòng</td>
                                                <td>{{ $nhatro->room_in_floor }} phòng</td>
                                                <td>{{ $nhatro->address }}</td>
                                                <td>{{ $nhatro->status }}</td>
                                                <td>{{ $nhatro->description }}</td>
                                                <td>
                                                    {{-- <form action="{{ route('delete_nhatro', $nhatro->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"><i class="fas fa-trash"></i></button>
                                                    </form> --}}
                                                    <a href="#" class="btn btn-outline-primary" data-toggle="modal"
                                                        data-target="#exampleModal">Add New</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end data table  -->
                <!-- ============================================================== -->
            </div>
            @include('admin.nhatro.create')
        </div>
    </div>
@endsection
