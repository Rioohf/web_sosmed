<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(0deg, rgba(255,235,197,1) 0%, rgba(217,226,232,1) 100%); font-family: Arial, sans-serif;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('user.profile')}}"><i class="bi bi-threads"></i>SocialPPKDJP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse Navbar -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.create')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('keluar')}}" >Keluar</a>
                </li>
                <li class="nav-item">
                    <form class="d-flex" role="search" method="POST" action="{{ route('search.hashtag') }}">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>
