@foreach ($nhatros as $nhatro)
    <div class="row">
        <!-- ============================================================== -->
        <!-- modal  -->
        <!-- ============================================================== -->
        <div class="modal fade" id="exampleModal_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 1200px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Details {{ $nhatro->name }}</h5>
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
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom02">Acreage</label>
                                            <input type="number" class="form-control" id="validationCustom02"
                                                placeholder="Acreage" name="acreage" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom03">Price</label>
                                            <input type="number" class="form-control" id="validationCustom03"
                                                placeholder="Price" name="price" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom04">Floor</label>
                                            <input type="number" class="form-control" id="validationCustom04"
                                                placeholder="Floor" name="n_floor" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom05">Room</label>
                                            <input type="number" class="form-control" id="validationCustom05"
                                                placeholder="Room" name="n_room" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom06">Room In Floor</label>
                                            <input type="number" class="form-control" id="validationCustom06"
                                                placeholder="Room In Floor" name="room_in_floor" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom07">Address</label>
                                            <input type="text" class="form-control" id="validationCustom07"
                                                placeholder="Address" name="address" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                            <label for="validationCustom08">Status</label>
                                            <select class="form-control" id="validationCustom08" name="status">
                                                <option>Enable</option>
                                                <option>Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 ">
                                            <label for="validationCustom10">Description</label>
                                            <textarea type="text" class="form-control" id="validationCustom10" placeholder="Description" name="description"></textarea>
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
        <!-- ============================================================== -->
        <!-- modal  -->
        <!-- ============================================================== -->
    </div>
@endforeach
