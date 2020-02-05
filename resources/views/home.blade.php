@extends('layouts.app') 
@section('content')
        @if(Auth::user()-level == "Admin Utama")
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body mb-0">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                <div class="">
                                    <h4 class="mt-0 header-title">Total Sales</h4>
                                    <h2 class="mt-0 font-weight-bold text-dark">40k</h2>
                                    <p class="mb-0 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-4 align-self-center">
                                <div class="icon-info text-right">
                                    <i class="dripicons-cart bg-soft-warning"></i>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                    <div class="card-body overflow-hidden p-0">
                        <div class="d-flex mb-0 h-100 dash-info-box">
                            <div class="w-100">
                                <div class="apexchart-wrapper">
                                    <div id="dash_spark_1" class="chart-gutters"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body mb-0">
                        <div class="row">
                            <div class="col-8 align-self-center">
                                <div class="">
                                    <h4 class="mt-0 header-title">Total Revenue</h4>
                                    <h2 class="mt-0 font-weight-bold text-dark">$9090</h2>
                                    <p class="mb-0 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up from yesterday</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-4 align-self-center">
                                <div class="icon-info text-right">
                                    <i class="dripicons-wallet bg-soft-success"></i>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                    <div class="card-body overflow-hidden p-0">
                        <div class="d-flex mb-0 h-100 dash-info-box">
                            <div class="w-100">
                                <div class="apexchart-wrapper">
                                    <div id="apex_column1" class="chart-gutters"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-lg-4">
                <div class="card carousel-bg-img">
                    <div class="card-body dash-info-carousel mb-0">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Average Product Price</h4>
                                                <div class="icon-info my-3">
                                                    <i class="dripicons-jewel bg-soft-pink"></i>
                                                </div>
                                                <h2 class="mt-0 font-weight-bold text-dark">$1280.00</h2>
                                                <p class="mb-1 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>35.5%</span> Last 100 Subscriptions</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end carousel-item-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">New Orders</h4>
                                                <div class="icon-info my-3">
                                                    <i class="dripicons-basket bg-soft-info"></i>
                                                </div>
                                                <h2 class="mt-0 font-weight-bold text-dark">1824</h2>
                                                <p class="mb-1 text-muted"><span class="text-danger"><i class="mdi mdi-arrow-down"></i>1.5%</span> Down From Last week</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end carousel-item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Order Returns</h4>
                                                <div class="icon-info my-3">
                                                    <i class="dripicons-swap bg-soft-primary"></i>
                                                </div>
                                                <h2 class="mt-0 font-weight-bold text-dark">11.1%</h2>
                                                <p class="mb-1 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from Last Month</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end carousel-item-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Total Brands</h4>
                                                <div class="icon-info my-3">
                                                    <i class="dripicons-store bg-soft-warning"></i>
                                                </div>
                                                <h2 class="mt-0 font-weight-bold text-dark">92</h2>
                                                <p class="mb-1 text-muted">All International Brands</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end carousel-item-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-12 align-self-center">
                                            <div class="text-center">
                                                <h4 class="mt-0 header-title text-left">Total Visits</h4>
                                                <div class="icon-info my-3">
                                                    <i class="dripicons-user-group bg-soft-success"></i>
                                                </div>
                                                <h2 class="mt-0 font-weight-bold text-dark">35k</h2>
                                                <p class="mb-1 text-muted"><span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from yesterday</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end carousel-item-->
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body new-user order-list">
                        <h4 class="header-title mt-0 mb-3">Order List</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Pro Name</th>
                                        <th class="border-top-0">Country</th>
                                        <th class="border-top-0">Order Date/Time</th>
                                        <th class="border-top-0">Pcs.</th>
                                        <th class="border-top-0">Amount ($)</th>
                                        <th class="border-top-0">Status</th>
                                    </tr>
                                    <!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="" src="/vertical/assets/images/products/img-1.png" alt="user"> </td>
                                        <td>
                                            Beg
                                        </td>
                                        <td>
                                            <img src="/vertical/assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        <td>3/03/2019 4:29 PM</td>
                                        <td>200</td>
                                        <td> $750</td>
                                        <td>
                                            <span class="badge badge-boxed  badge-soft-success">Shipped</span>
                                        </td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td>
                                            <img class="" src="/vertical/assets/images/products/img-2.png" alt="user"> </td>
                                        <td>
                                            Watch
                                        </td>
                                        <td>
                                            <img src="/vertical/assets/images/flags/french_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        <td>13/03/2019 1:09 PM</td>
                                        <td>180</td>
                                        <td> $970</td>
                                        <td>
                                            <span class="badge badge-boxed  badge-soft-danger">Delivered</span>
                                        </td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td>
                                            <img class="" src="/vertical/assets/images/products/img-3.png" alt="user"> </td>
                                        <td>
                                            Headphone
                                        </td>
                                        <td>
                                            <img src="/vertical/assets/images/flags/spain_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        <td>22/03/2019 12:09 PM</td>
                                        <td>30</td>
                                        <td> $2800</td>
                                        <td>
                                            <span class="badge badge-boxed badge-soft-warning">Pending</span>
                                        </td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td>
                                            <img class="" src="/vertical/assets/images/products/img-4.png" alt="user"> </td>
                                        <td>
                                            Purse
                                        </td>
                                        <td>
                                            <img src="/vertical/assets/images/flags/russia_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        <td>14/03/2019 8:27 PM</td>
                                        <td>100</td>
                                        <td> $520</td>
                                        <td>
                                            <span class="badge badge-boxed  badge-soft-success">Shipped</span>
                                        </td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td>
                                            <img class="" src="/vertical/assets/images/products/img-5.png" alt="user"> </td>
                                        <td>
                                            Shoe
                                        </td>
                                        <td>
                                            <img src="/vertical/assets/images/flags/italy_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        <td>18/03/2019 5:09 PM</td>
                                        <td>100</td>
                                        <td> $1150</td>
                                        <td>
                                            <span class="badge badge-boxed badge-soft-warning">Pending</span>
                                        </td>
                                    </tr>
                                    <!--end tr-->
                                    <tr>
                                        <td>
                                            <img class="" src="/vertical/assets/images/products/img-6.png" alt="user"> </td>
                                        <td>
                                            Boll
                                        </td>
                                        <td>
                                            <img src="/vertical/assets/images/flags/us_flag.jpg" alt="" class="img-flag thumb-xxs rounded-circle">
                                        </td>
                                        <td>30/03/2019 4:29 PM</td>
                                        <td>140</td>
                                        <td> $ 650</td>
                                        <td>
                                            <span class="badge badge-boxed  badge-soft-success">Shipped</span>
                                        </td>
                                    </tr>
                                    <!--end tr-->
                                </tbody>
                            </table>
                            <!--end table-->
                        </div>
                        <!--end /div-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    <footer class="footer text-center text-sm-left">
        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer>
</div>
@endif
@endsection