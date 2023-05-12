@extends('app')

@section('sidebar')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">Management</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="member">
                    <i class="bi bi-people"></i>
                    <span>Members</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="posts">
                    <i class="bi bi-chat-quote"></i>
                    <span>Posts</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="events">
                    <i class="bi bi-calendar-event"></i>
                    <span>Events</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-heading">Contribution</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="contribution">
                    <i class="bi bi-piggy-bank"></i>
                    <span>Contributions Threads</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link" href="revenue">
                    <i class="bi bi-currency-dollar"></i>
                    <span>Revenue Management</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-heading">Others</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="profile">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>
            <!-- End Members Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->
@endsection


@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Revenue Statement</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Revenue Statement</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Revenue Statement Details</h5>
                            <br />
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Transaction ID</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Revenue Type</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>QWERTY1234</td>
                                        <td>2000</td>
                                        <td>Big Heart</td>
                                        <td>12/29/2022</td>
                                    </tr>
                                    < <tr>
                                        <td>QWERTY1234</td>
                                        <td>2000</td>
                                        <td>Big Heart</td>
                                        <td>12/29/2022</td>
                                        </tr>
                                        <tr>
                                            <td>QWERTY1234</td>
                                            <td>2000</td>
                                            <td>Big Heart</td>
                                            <td>12/29/2022</td>
                                        </tr>
                                        <tr>
                                            <td>QWERTY1234</td>
                                            <td>2000</td>
                                            <td>Big Heart</td>
                                            <td>12/29/2022</td>
                                        </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="add_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create New Thread</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                    Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">
                                    Target Amount
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">
                                    Date
                                </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">
                                    Poster Image
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Purpose
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Create Thread
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Candidate Modal-->

        <div class="modal fade" id="edit_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Thread Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                    Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">
                                    Target Amount
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">
                                    Date
                                </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">
                                    Poster Image
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Purpose
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Create Thread
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Candidate Modal-->

        <!-- Add Candidate Modal-->

        <div class="modal fade" id="delete_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Thread</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Do you wish to delete
                            <b>The Big Heart Foundation</b>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-danger">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Candidate Modal-->
    </main>
    <!-- End #main -->
@endsection
