@extends('admin.index')
@section('content')
    <!-- MAIN CONTENT
        <div class="main-content">
            <div class="section__content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <form action="{{ route('delete_nhatro', $nhatro->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <a href="">
                                            <i class="zmdi zmdi-plus"></i> Xóa
                                        </a></button>
                                </form>
                            </div>
                            <div class="table-data__tool-right">

                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="{{ route('nhatro') }}">
                                        <i class="zmdi zmdi-plus"></i> Danh Sách Nhà Trọ
                                    </a>
                                </button>
                                <form action="{{ route('delete_nhatro', $nhatro->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <a href="">
                                            <i class="zmdi zmdi-plus"></i> Xóa
                                        </a>
                                    </button>
                                </form>
                            </div>
                        </div> --}}
                            <div class="card">
                                <div class="card-body card-header">
                                    <div class="card-title" style="padding-bottom: 1%">
                                        <h3 class="title-2 uppercase">CHI TIẾT NHÀ TRỌ
                                            {{ $nhatro->name }}</h3>
                                        <hr style="margin-top: 1%">
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{ $nhatro->name }}</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{ $nhatro->status }}</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{ $nhatro->description }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <img src="{{ $nhatro->images }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        END MAIN CONTENT-->
@endsection
