@extends('web.layout.main')
@section('content')
    <!--start page content-->
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="py-4 border-bottom">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--start product details-->
        <section class="section-padding">
            <div class="container">
                <div class="d-flex align-items-center px-3 py-2 border mb-4">
                    <div class="text-start">
                        <h4 class="mb-0 h4 fw-bold">Account - Profile</h4>
                    </div>
                </div>
                <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
                <div class="row">
                    <div class="col-12 col-xl-3 filter-column">
                        <nav class="navbar navbar-expand-xl flex-wrap p-0">
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">Account</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body account-menu">
                                <div class="list-group w-100 rounded-0">
                                    <a href="/profile/myorders" class="list-group-item"><i class="bi bi-basket3 me-2"></i>Orders</a>
                                    <a href="/profile" class="list-group-item active"><i class="bi bi-person me-2"></i>Profile</a>
                                    <a href="/profile/edit" class="list-group-item"><i class="bi bi-pencil me-2"></i>Edit Profile</a>
                                    <a href="/shop/wish" class="list-group-item"><i class="bi bi-suit-heart me-2"></i>Wishlist</a>
                                </div>
                            </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="card rounded-0">
                            <div class="card-body p-lg-5">
                                <h5 class="mb-0 fw-bold">Profile Details</h5>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <img src="{{asset('storage/'.$userdata['photo'])}}">
                                                </t>
                                            </tr>
                                            <tr>
                                                <td>Full Name</td>
                                                <td>{{$userdata['name']}}</td>
                                            </tr>
                                            <tr>
                                                <td>User Name</td>
                                                <td>{{$userdata['username']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Number</td>
                                                <td>{{$userdata['phone']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email ID</td>
                                                <td>{{$userdata['email']}}</td>
                                            </tr>
                                            <tr>
                                                <td>DOB</td>
                                                <td>{{$userdata['dob']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Location</td>
                                                <td>{{$userdata['address']}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-outline-dark btn-ecomm px-5"><i class="bi bi-pencil me-2"></i>Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </section>
        <!--start product details-->


        <!-- filter Modal -->
        <div class="modal" id="FilterOrders" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Filter Orders</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="mb-3 fw-bold">Status</h6>
                        <div class="status-radio d-flex flex-column gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    All
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    On the way
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Delivered
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    Cancelled
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                <label class="form-check-label" for="flexRadioDefault5">
                                    Returned
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h6 class="mb-3 fw-bold">Time</h6>
                        <div class="status-radio d-flex flex-column gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault6" checked>
                                <label class="form-check-label" for="flexRadioDefault6">
                                    Anytime
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault7">
                                <label class="form-check-label" for="flexRadioDefault7">
                                    Last 30 days
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault8">
                                <label class="form-check-label" for="flexRadioDefault8">
                                    Last 6 months
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault9">
                                <label class="form-check-label" for="flexRadioDefault9">
                                    Last year
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="d-flex align-items-center gap-3 w-100">
                            <button type="button" class="btn btn-outline-dark btn-ecomm w-50">Clear Filters</button>
                            <button type="button" class="btn btn-dark btn-ecomm w-50">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Filters Modal -->


    </div>
    <!--end page content-->
@endsection
