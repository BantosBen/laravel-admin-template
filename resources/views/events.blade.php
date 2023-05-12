@extends('app')

@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Events</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Events</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Event Details</h5>
                            <button type="button" class="btn btn-primary float-left" data-bs-toggle="modal"
                                data-bs-target="#add_candidate">
                                <i class="bi bi-plus-lg me-1"></i>
                                Create Event
                            </button>
                            <br />
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Attendance</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            The Big Heart Foundation
                                        </td>
                                        <td>
                                            The Big Heart Foundation HQ
                                        </td>
                                        <td>12/29/2022</td>
                                        <td>13</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#attendance_candidate">
                                                        <i class="bi bi-list-check"></i>
                                                    </button>
                                                </div>
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#edit_candidate">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                </div>
                                                <div class="col col-md-4">
                                                    <button style="display: inline;" type="button"
                                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#delete_candidate">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            The Big Heart Foundation
                                        </td>
                                        <td>
                                            The Big Heart Foundation HQ
                                        </td>
                                        <td>12/29/2022</td>
                                        <td>13</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#attendance_candidate">
                                                        <i class="bi bi-list-check"></i>
                                                    </button>
                                                </div>
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#edit_candidate">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                </div>
                                                <div class="col col-md-4">
                                                    <button style="display: inline;" type="button"
                                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#delete_candidate">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
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
                        <h5 class="modal-title">Create New Event</h5>
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
                                    Location
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" />
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
                                    Event Poster
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Caption
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Create Event
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
                        <h5 class="modal-title">Edit Event Details</h5>
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
                                    Location
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" />
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
                                    Event Poster
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Caption
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Update Event
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

        <div class="modal fade" id="delete_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Do you wish to delete Event
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

        <div class="modal fade" id="attendance_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Attendance List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>Angatia Benson</li>
                            <li>Peninnah Wanjiku</li>
                            <li>Bantos Ben</li>
                            <li>Shiko Pesh</li>
                            <li>Angatia Benson</li>
                            <li>Peninnah Wanjiku</li>
                            <li>Bantos Ben</li>
                            <li>Shiko Pesh</li>
                            <li>Angatia Benson</li>
                            <li>Peninnah Wanjiku</li>
                            <li>Bantos Ben</li>
                            <li>Shiko Pesh</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Candidate Modal-->
    </main>
    <!-- End #main -->
@endsection
