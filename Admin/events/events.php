<?php
include('../layout/topBar.php');
?>
<div class="packages">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-4">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Event Listing</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="titleBox py-4">
                <div class="addPackages text-md-right">
                    <a href="./add-events.php" class="btn rounded-pill px-4">Create Event</a>
                </div>
            </div>
        </div>
    </div>
    <div class="notification-section shadow p-5 rounded-15 my-4">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <!-- entries -->
                <div class="selectBox mb-4">
                    <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                        <p class="mb-0 achivpFont">Show:</p>
                        <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                            <option selected>Record Per Page</option>
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">30</option>
                        </select>
                        <p class="mb-0">Entries</p>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-3">
                    <div class="dateBox d-flex align-items-center gap-15 flex-wrap flex-md-nowrap">
                        <p class="mb-0 achivpFont flex-shrink-0">Sort By Date:</p>
                        <div class="flex-grow-1">
                            <div class="form-group">
                                <label class="mb-0">From</label>
                                <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker7">
                                </div>
                            </div>
                        </div>
                        -
                        <div class="flex-grow-1">
                            <div class="form-group">
                                <label for="">To</label>
                                <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker8">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center flex-wrap selectBox gap-15 my-4 justify-content-md-end">
                    <div class="title flex-shrink-0">
                        <p class="achivpFont mb-0">Filter By Status:</p>
                    </div>
                    <div class="filterField">
                        <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                            <option>Select Status</option>
                            <option value="active">Active</option>
                            <option value="Finished">Finished</option>
                        </select>
                    </div>
                </div>
                <div class="userSeach input-group w-auto">
                    <input class="form-control w-50 py-2 border-right-0 border" type="search" placeholder="Search" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pt-5 table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="table-site-headings">S.No.</th>
                            <th class="table-site-headings">First Name</th>
                            <th class="table-site-headings">Last Name</th>
                            <th class="table-site-headings">Registration Date</th>
                            <th class="table-site-headings">Email</th>
                            <th class="table-site-headings">Status</th>
                            <th class="table-site-headings">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>Abc</td>
                            <td>100</td>
                            <td> <span class="primary-status status-active">Active</span></td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1" href="./business-plan.php"><i class="bi bi-eye table-eye pr-2"></i>Details</button>
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>Abc</td>
                            <td>100</td>
                            <td> <span class="primary-status status-active">Active</span></td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1" href="./business-plan.php"><i class="bi bi-eye table-eye pr-2"></i>Details</button>
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>Abc</td>
                            <td>100</td>
                            <td> <span class="primary-status status-Finished">Finished</span></td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1" href="./business-plan.php"><i class="bi bi-eye table-eye pr-2"></i>Details</button>
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>Abc</td>
                            <td>100</td>
                            <td> <span class="primary-status status-Finished">Finished</span></td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1" href="./business-plan.php"><i class="bi bi-eye table-eye pr-2"></i>Details</button>
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>Abc</td>
                            <td>100</td>
                            <td> <span class="primary-status status-active">Active</span></td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1" href="./business-plan.php"><i class="bi bi-eye table-eye pr-2"></i>Details</button>
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between flex-wrap align-items-center">
                <p class="mb-0">Showing 10 of 50 Entries</p>
                <div class="DetailsAll d-flex justify-content-end flex-wrap py-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('../layout/footer.php'); ?>