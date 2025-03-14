@extends('dashboard.layout.main')
@section('main-section')

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">


                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row">
                                <div class="col-lg-12 mb-4 order-0">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @else
                                        @if (session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                    @endif
                                    <div class="card">
                                        <div class="d-flex align-items-end row">
                                            <div class="col-sm-7">
                                                <div class="card-body">
                                                    <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                                    <p class="mb-4">
                                                        You have done <span class="fw-medium">72%</span> more sales today.
                                                        Check your new badge in
                                                        your profile.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 text-center text-sm-left">
                                                <div class="card-body pb-0 px-0 px-md-4">
                                                    <img src="../dashboard/assets/img/illustrations/man-with-laptop-light.png"
                                                        height="140" alt="View Badge User"
                                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 order-1">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            {{-- <img src="../dashboard/assets/img/icons/unicons/chart-success.png" alt="chart success"
                              class="rounded" /> --}}
                                                            <i style="font-size: 34px;"
                                                                class="fa-solid fa-users text-primary"></i>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="cardOpt3">
                                                                <a class="dropdown-item" href="javascript:void(0);">View
                                                                    More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="fw-medium d-block mb-1">Total | Admins</span>
                                                    <h3 class="card-title mb-2">6</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            {{-- <img src="../dashboard/assets/img/icons/unicons/chart-success.png" alt="chart success"
                              class="rounded" /> --}}
                                                            <i style="font-size: 34px;"
                                                                class="fa-solid fa-users text-success"></i>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="cardOpt3">
                                                                <a class="dropdown-item" href="javascript:void(0);">View
                                                                    More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="fw-medium d-block mb-1">Total | Distributors</span>
                                                    <h3 class="card-title mb-2">6</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-6 order-3 order-md-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            {{-- <img src="../dashboard/assets/img/icons/unicons/chart-success.png" alt="chart success"
                              class="rounded" /> --}}
                                                            <i style="font-size: 34px;"
                                                                class="fa-solid fa-users text-danger"></i>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="cardOpt3">
                                                                <a class="dropdown-item" href="javascript:void(0);">View
                                                                    More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="fw-medium d-block mb-1">Total | Agents</span>
                                                    <h3 class="card-title mb-2">6</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <i style="font-size: 34px;"
                                                                class="fa-solid fa-users text-secondary"></i>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="cardOpt3">
                                                                <a class="dropdown-item" href="javascript:void(0);">View
                                                                    More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="fw-medium d-block mb-1">Total | Players</span>
                                                    <h3 class="card-title mb-2">6</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4 order-0">
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Large Modal -->
                                        <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel3">Add Admin</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('add-admin') }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="basic-default-fullname">Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="basic-default-fullname" name="admin_name" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="basic-default-company">Username</label>
                                                                <input type="text" class="form-control"
                                                                    id="basic-default-company" name="admin_username" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="basic-default-phone">Password</label>
                                                                <input type="password" id="basic-default-phone"
                                                                    class="form-control phone-mask"
                                                                    name="admin_password" />
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="demo-inline-spacing">
                                            <h1 style="font-size: 20px; font-weight: 700; padding-top: 10px;">Admins
                                                Details</h1>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#largeModal">
                                                Add Admin
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 order-0">
                                    <div class="card">
                                        <h5 class="card-header">Admins</h5>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>John Doe</td>
                                                        <td>john_doe</td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="demo-inline-spacing">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination">
                                                        <li class="page-item prev">
                                                            <a class="page-link" href="javascript:void(0);"><i
                                                                    class="tf-icon bx bx-chevron-left"></i></a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0);">1</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="javascript:void(0);">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0);">3</a>
                                                        </li>
                                                        <li class="page-item next">
                                                            <a class="page-link" href="javascript:void(0);"><i
                                                                    class="tf-icon bx bx-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <!--/ Basic Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Content -->
                    @endsection
