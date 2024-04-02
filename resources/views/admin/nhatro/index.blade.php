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
                                            <th>Status</th>
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
                                                <td>{{ $nhatro->status }}</td>
                                                <td>
                                                    <a class="mr-2 ml-2" href="#" data-toggle="modal" id="detailsBtn"
                                                        data-target="#exampleModal_detail" data-class-id="{{$nhatro->id}}"><i class="fas fa-eye"></i></a>
                                                    <a class="mr-2 ml-2" href="#" data-toggle="modal"
                                                        data-target="#exampleModal_edit"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a class="mr-2 ml-2" href="#" data-toggle="modal"
                                                        data-target="#exampleModal_delete"><i class="fas fa-trash"></i></a>
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
            {{-- @include('admin.nhatro.show') --}}
            @include('admin.nhatro.edit')
            @include('admin.nhatro.delete')
        </div>
    </div>
   
        <!-- ============================================================== -->
        <!-- modal  -->
        <!-- ============================================================== -->
        <div class="modal fade" id="exampleModal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 1200px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="classModalLabel"></h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="margin-bottom: 0px;">
                                <div class="card-body">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="/assets/images/card-img-1.jpg"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="/assets/images/card-img-2.jpg"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="/assets/images/card-img-3.jpg"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span> </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <label for="validationCustom01">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" 
                                            readonly disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom02">Acreage</label>
                                            <input type="number" class="form-control" id="acreage"
                                                placeholder="Acreage" name="acreage"  readonly disabled>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price"
                                                placeholder="Price" name="price"  readonly disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom04">Floor</label>
                                            <input type="number" class="form-control" id="n_floor"
                                                placeholder="Floor" name="n_floor"  readonly disabled>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="n_room">Room</label>
                                            <input type="number" class="form-control" id="n_room"
                                                placeholder="Room" name="n_room"  readonly disabled>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="room_in_floor">Room In Floor</label>
                                            <input type="number" class="form-control" id="room_in_floor"
                                                placeholder="Room In Floor" name="room_in_floor"  readonly disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                placeholder="Address" name="address"  readonly disabled>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status"
                                            placeholder="status" name="status"  readonly disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" id="description" placeholder="Description" name="description"  readonly disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal"
                                            style="color: #000; font-weight: bold;">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>

                </div>
            </div>
        </div>
      
    <script>
        $(document).ready(function() {
            $('#detailsBtn').click(function() {
                var contactId = $(this).data('class-id');
                $.ajax({
                    url: '/nhatro/show/' + contactId,
                    type: 'GET',
                    success: function(data) {
                        $('#classModalLabel').text(data.name);
                        $('#name').val(data.name); 
                        $('#acreage').val(data.acreage); 
                        $('#price').val(data.price); 
                        $('#n_floor').val(data.n_floor); 
                        $('#n_room').val(data.n_room); 
                        $('#room_in_floor').val(data.room_in_floor); 
                        $('#address').val(data.address); 
                        $('#status').val(data.status); 
                        $('#description').val(data.description); 
                        $('#exampleModal_detail').modal('show');
                    },
                    error: function() {
                        alert('Đã xảy ra lỗi khi lấy dữ liệu chi tiết liên hệ.');
                    }
                });
            });
        });
    </script>
@endsection
