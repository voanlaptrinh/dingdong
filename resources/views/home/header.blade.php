<!--Header section start-->
<header class="header header-sticky">
    <div class="header-bottom menu-center">
        <div class="container">
            <div class="row justify-content-between">

                <!--Logo start-->
                <div class="col mt-10 mb-10">
                    <div class="logo">
                        <a href="{{ route('/') }}"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col d-none d-lg-flex">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="{{ route('/') }}">Trang Chủ</a></li>
                            <li><a href="#">Giới Thiệu</a></li>
                            <li><a href="#">Dịch Vụ</a></li>
                            <li><a href="#">Nhà Trọ</a></li>
                            <li><a href="#">Tin Tức</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            {{-- <li class="has-dropdown"><a href="properties.html">Properties</a>
                                <ul class="sub-menu">
                                    <li class="has-dropdown"><a href="properties.html">Properties Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="properties.html">Default Layout</a></li>
                                            <li><a href="properties-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="properties-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="properties-list-left-sidebar.html">Properties
                                            List</a>
                                        <ul class="sub-menu">
                                            <li><a href="properties-list-left-sidebar.html">Left Sidebar</a>
                                            </li>
                                            <li><a href="properties-list-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="properties-carousel.html">Properties
                                            Carousel</a>
                                        <ul class="sub-menu">
                                            <li><a href="properties-carousel.html">Carousel Single Row</a></li>
                                            <li><a href="properties-carousel2.html">Carousel Double Row</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="single-properties.html">Single
                                            Properties</a>
                                        <ul class="sub-menu">
                                            <li><a href="single-properties.html">Left Sidebar</a></li>
                                            <li><a href="single-properties-right-sidebar.html">Right Sidebar</a>
                                            </li>
                                            <li><a href="single-properties-gallery.html">With Gallrey</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                @if (Route::has('login'))
                    <!--User start-->
                    @auth
                        <div class="col mr-sm-50 mr-xs-50">
                            <x-app-layout />

                        </div>
                    @else
                        <div class="col mr-sm-50 mr-xs-50">
                            <div class="header-user">
                                <a href="{{ route('login') }}" class="user-toggle">
                                    <i class="pe-7s-user"></i><span>Đăng Nhập</span>
                                </a>
                            </div>
                        </div>
                    @endauth

                    <!--User end-->
                @endif




            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->

        </div>
    </div>
</header>
<!--Header section end-->
