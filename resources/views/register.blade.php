<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f7f6e4; /* Warna latar belakang lembut */
            font-family: 'Arial', sans-serif; /* Font yang bersih */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Mengisi seluruh tinggi viewport */
            margin: 0; /* Menghapus margin default */
        }

        .card {
            max-width: 400px; /* Lebar maksimal kartu */
            width: 100%; /* Kartu responsif */
            border-radius: 10px; /* Sudut membulat */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
        }

        .card-header {
            text-align: center; /* Rata tengah judul */
            background-color: #8da2b8; /* Warna latar belakang header */
            color: white; /* Warna teks header */
            border-top-left-radius: 10px; /* Sudut membulat kiri atas */
            border-top-right-radius: 10px; /* Sudut membulat kanan atas */
        }

        .card-title {
            font-size: 24px; /* Ukuran font untuk judul */
            font-weight: bold; /* Ketebalan font */
        }

        .alert {
            margin-bottom: 20px; /* Jarak bawah untuk pesan kesalahan */
        }
    </style>
</head>



<div class="card">
    @include('sweetalert::alert')
    <div class="card-header">
      <h5 align="center" class="card-title"><i class="bi bi-threads"></i>Register</h5>
    </div>
    <div class="card-body">
      <form action="{{route('action-register')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Username</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-success w-100 mb-3">Sign up</button>
        <a href="{{route('login')}}" class="btn btn-danger w-100">Kembali</a>
      </form>
    </div>
</div>
