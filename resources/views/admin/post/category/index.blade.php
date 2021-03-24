@extends('admin.layouts.app')



@section('main-content')

		<!-- Main Wrapper -->
	<div class="main-wrapper">

		@include('admin.layouts.header')
		@include('admin.layouts.sidemenu')






	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">Welcome {{Auth::user() -> name}}!</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">Category</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-lg-12">
					<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_category_modal">Add new category</a>

					<div class="card">
						<div class="card-header">
							<h4 class="card-title">All categories</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped mb-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Title</th>
											<th>Catagory</th>
											<th>Tag</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Doe</td>
											<td>john@example.com</td>
											<td>john@example.com</td>
											<td>john@example.com</td>
											<td>

												<a class="btn btn-sm btn-info" href="#">View</a>
												<a class="btn btn-sm btn-primary" href="#">Edit</a>
												<a class="btn btn-sm btn-danger" href="#">Delete</a>

											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->




    <div id="add_category_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Add new category</h2>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
