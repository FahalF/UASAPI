<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ asset('/home') }}">Weblog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
        <a class="nav-link" href="{{ url('/articles/new') }}">New Artikel</a>
      </div>
    </div>

            <div class="d-flex">
                <small class="mt-2" style="color: #fff">Author {{ session()->get('name') }}</small>
                <small class="mt-2" style="background-color: #fff;margin-left: 5px;"><a class="dropdown-item" href="{{ route('signout') }}">Logout</a>
            </div>
  </div>
</nav>