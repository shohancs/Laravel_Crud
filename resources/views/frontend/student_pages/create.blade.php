@extends('frontend.home')

@section('page-title')
<title>Create New Student | Create</title>
@endsection


@section('page-css')
<script src="https://kit.fontawesome.com/0c66e46c25.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('frontend/includes/custom.css') }}">
@endsection


@section('body-content')
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Create New Student Information</h2>
					<hr>
					<div class="border border-1 rounded p-3 shadow-sm bg-body-tertiary">
						<form action="{{ route('student.store') }}" method="POST">
							@csrf

							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="" class="form-label">Full Name</label>
										<input type="text" name="name" class="form-control" required autocomplete="off">
									</div>								

									<div class="mb-3">
										<label for="" class="form-label">Father Name</label>
										<input type="text" name="fname" class="form-control" required autocomplete="off">
									</div>

									<div class="mb-3">
										<label for="" class="form-label">Mother Name</label>
										<input type="text" name="mname" class="form-control" required autocomplete="off">
									</div>

									<div class="mb-3">
										<label for="" class="form-label">Email Address</label>
										<input type="email" name="email" class="form-control" required autocomplete="off">
									</div>								
								</div>

								<div class="col-lg-6">
									<div class="mb-3">
										<label for="" class="form-label">Phone No.</label>
										<input type="tel" name="phone" class="form-control" required autocomplete="off">
									</div>

									<div class="mb-3">
										<label for="" class="form-label">Present Address</label>
										<textarea name="address" class="form-control" rows="5" required autocomplete="off"></textarea>
									</div>

									<div class="mb-3">
										<label for="" class="form-label">Active Status</label>
										<select class="form-select" name="status">
										  <option value="1">Please Select the Status</option>
										  <option value="1">Active</option>
										  <option value="0">InActive</option>
										</select>
									</div>

									<div class="mb-3">
										<div class="d-grid gap-2">
											<input type="submit" name="addStudent" class="btn btn-dark" value="Create New Student">
										</div> 
									</div>
								</div>
							</div>
						</form>
					</div>				
				</div>
			</div>
		</div>
	</section>
@endsection


@section('page-script')

@endsection