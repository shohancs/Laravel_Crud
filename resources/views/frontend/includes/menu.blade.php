<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">

                <a class="navbar-brand" href="{{ route('student.manage') }}" style="color: red; font-weight: 600;">CRUD LARAVEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                      <a class="btn btn-dark" href="{{ route('student.manage') }}">Manage All Students</a>
                    </li>

                    <li class="nav-item px-2">
                      <a class="btn btn-dark" href="{{ route('student.create') }}">Add Student</a>
                    </li>

                    <li class="nav-item px-2">
                      <a class="btn btn-dark" href="{{ route('student.managetrash') }}">Trash Manage</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>