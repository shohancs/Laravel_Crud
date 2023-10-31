@extends('frontend.home')

@section('page-title')
<title>Trash Manage | Trash</title>
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
					<h2>Trash Student Manage Page</h2>
					<hr>

					@if ($trashStudent->count() == 0)
					<div class="alert alert-info" role="alert">
					  No Data Found In Our Database!!
					</div>

					@else
					<!-- START: TABLE -->
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
						  <thead class="table-dark">
						    <tr>
						      <th scope="col">#SL.</th>
						      <th scope="col">Full Name</th>
						      <th scope="col">Slug(Student Name)</th>						      
						      <th scope="col">Father Name</th>
						      <th scope="col">Mother Name</th>
						      <th scope="col">Email Address</th>
						      <th scope="col">Phone No.</th>
						      <th scope="col">Present Address</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@php $i=1; @endphp
						  	@foreach ( $trashStudent as $trashStudentData )
						    <tr>
						      <th scope="row">{{ $i }}</th>
						      <td>{{ $trashStudentData->name }}</td>
						      <td>{{ $trashStudentData->slug }}</td>
						      <td>{{ $trashStudentData->fname }}</td>
						      <td>{{ $trashStudentData->mname }}</td>
						      <td>{{ $trashStudentData->email }}</td>
						      <td>{{ $trashStudentData->phone }}</td>
						      <td>{{ $trashStudentData->address }}</td>
						      <td>
						      	@if ( $trashStudentData->status == 1 ) 
						      	<span class="badge text-bg-primary">Active</span>

						      	@elseif ( $trashStudentData->status == 0 ) 
						      	<span class="badge text-bg-danger">InActive</span>

						      	@endif
						      </td>
						      <td>
						      	<div class="action-btn">
						      		<ul>
						      			<li>
						      				<a href="{{ route('student.edit', $trashStudentData->id) }}">
						      					<i class="fa-solid fa-pen-to-square"></i>
						      				</a>
						      			</li>
						      			<li>
						      				<a href="" data-bs-toggle="modal" data-bs-target="#trash{{ $trashStudentData->id }}">
						      					<i class="fa-solid fa-trash-can"></i>
						      				</a>
						      			</li>
						      		</ul>
<!-- START::MODAL -->
<div class="modal fade" id="trash{{ $trashStudentData->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		    <h1 class="modal-title fs-5" id="exampleModalLabel">Are You Sure to Delete <span style="color: green; font-weight: 600; text-transform: uppercase;">{{ $trashStudentData->name }}</span> !!</h1>
		    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
		    <div class="modal-btn">
		    	<ul>
		    		<li>
		    			<form action="{{ route('student.destroy', $trashStudentData->id) }}" method="POST">
		    				@csrf
		    				<input type="submit" name="trash" class="btn btn-danger" value="Delete">
		    			</form>
		    		</li>
		    		<li>
		    			<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
		    		</li>
		    	</ul>
		    </div>
		  </div>
		</div>
	</div>
</div>
<!-- END::MODAL -->
						      	</div>
						      </td>
						    </tr>
						    @php $i++; @endphp
						    @endforeach
						  </tbody>
						</table>
					</div>					
					<!-- END: TABLE -->

					@endif
				</div>
			</div>
		</div>
	</section>
@endsection


@section('page-script')

@endsection