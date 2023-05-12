@extends('app')

@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Members</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Members</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Member Details</h5>
                            <button type="button" class="btn btn-primary float-left" data-bs-toggle="modal"
                                data-bs-target="#add_candidate">
                                <i class="bi bi-plus-lg me-1"></i>
                                Add New
                            </button>
                            <br />
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Membership Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                                        <td>TBHM/123456</td>
                                        <td>Angatia Benson</td>
                                        <td>Male</td>
                                        <td>angatiabenson1@gmail.com</td>
                                        <td>
                                            <div class="row gx-2">
                                                <div class="col col-md-4">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#view_candidate">
                                                        <i class="bi bi-eye"></i>
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
                        <h5 class="modal-title">Add New Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">
                                    Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                    Email
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Phone
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios1" value="option1" checked />
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2" />
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2" />
                                        <label class="form-check-label" for="gridRadios2">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <p><i>Member's default account password will be 1234tbh</i></p>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Create Account
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
                        <h5 class="modal-title">Edit Member Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">
                                    Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">
                                    Email
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Phone
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" />
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios1" value="option1" checked />
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2" />
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2" />
                                        <label class="form-check-label" for="gridRadios2">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Update Member
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

        <div class="modal fade" id="view_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">View Member Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <strong>
                            <center>
                                <h5><span class="bold">Angatia Benson</span></h5>
                                <h6><span>TBHM/123456</span></h6>
                            </center>
                        </strong>
                        <br />
                        <p>Gender: Male</p>
                        <p>Email: angatiabenson1@gmail.com</p>
                        <p>Phone: 0748355080</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Candidate Modal-->

        <div class="modal fade" id="delete_candidate" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Candidate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Do you wish to delete
                            <b>Angatia Benson</b>
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


@php
    $activeMenu = 'member';
@endphp
