@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 fw-bold text-primary">Dashboard</h1>
        <ol class="breadcrumb mb-4 bg-light rounded p-2">
            <li class="breadcrumb-item active text-secondary">Dashboard</li>
        </ol>

        <!-- Cards Section -->
        <div class="row g-4">
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-primary text-white">
                    <div class="card-body fs-5">📦 Stock</div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                        <a class="text-white small stretched-link" href="{{ route('all.product') }}">View Details</a>
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-warning text-white">
                    <div class="card-body fs-5">🛒 Sold Products</div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                        <a class="text-white small stretched-link" href="{{ route('sold.products') }}">View Details</a>
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-success text-white">
                    <div class="card-body fs-5">✅ Available Products</div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                        <a class="text-white small stretched-link" href="{{ route('available.products') }}">View Details</a>
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-danger text-white">
                    <div class="card-body fs-5">⏳ Pending Orders</div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                        <a class="text-white small stretched-link" href="{{ route('pending.orders') }}">View Details</a>
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="row mt-4">
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white fw-semibold">
                        📈 Area Chart
                    </div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white fw-semibold">
                        📊 Bar Chart
                    </div>
                    <div class="card-body">
                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTable -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-white fw-semibold">
                🗃️ Data Table
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
