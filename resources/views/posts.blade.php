@extends('app')

@section('main')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Posts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Posts Published</h5>
                            <button type="button" class="btn btn-primary float-left" data-bs-toggle="modal"
                                data-bs-target="#add_candidate">
                                <i class="bi bi-plus-lg me-1"></i>
                                Publish Post
                            </button>
                            <br />
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Caption</th>
                                        <th scope="col">Likes</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <img src="assets/img/product-1.jpg" alt=""
                                                style="width: 50%; height: 50%;" />
                                        </th>
                                        <td>
                                            This was a great adventure at the Big Heart Children
                                            Homes. This was a great adventure at the Big Heart
                                            Children Homes. This was a great adventure at the Big
                                            Heart Children Homes
                                        </td>
                                        <td>0</td>
                                        <td>
                                            <div class="row gx-2">
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
                                        <th scope="row">
                                            <img src="assets/img/product-1.jpg" alt=""
                                                style="width: 50%; height: 50%;" />
                                        </th>
                                        <td>
                                            This was a great adventure at the Big Heart Children
                                            Homes. This was a great adventure at the Big Heart
                                            Children Homes. This was a great adventure at the Big
                                            Heart Children Homes
                                        </td>
                                        <td>0</td>
                                        <td>
                                            <div class="row gx-2">
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
                        <h5 class="modal-title">Publish New Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">
                                    Post Image
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Post Caption
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Publish
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
                        <h5 class="modal-title">Edit Post Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">
                                    Post Image
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                    Post Caption
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Publish
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
                        <h5 class="modal-title">Delete Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Do you wish to delete
                            <b>Post 12</b>
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
