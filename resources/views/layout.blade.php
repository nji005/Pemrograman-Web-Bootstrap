<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>@yield('title', 'Laravel Estetik')</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
 <style>
  body {
    background: linear-gradient(180deg, #f9fbff, #eef4ff);
    color: #2d2d2d;
    font-family: 'Poppins', sans-serif;
  }
  .navbar {
    background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  }
  .navbar-brand {
    color: #0d6efd !important;
    font-weight: 600;
    font-size: 1.2rem;
  }
  .navbar a {
    color: #4a4a4a !important;
    font-weight: 500;
    transition: color 0.3s;
  }
  .navbar a:hover {
    color: #0d6efd !important;
  }
  .navbar a.active {
    color: #0d6efd !important;
    font-weight: 600;
  }
  .hero {
    text-align: center;
    padding: 60px 20px 40px;
  }
  .hero h1 {
    font-weight: 600;
    color: #1b1b1b;
    font-size: 2rem;
  }
  .hero p {
    color: #5a5a5a;
    font-size: 1rem;
  }
  .card {
    background: #fff;
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
  }
  .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
  }
  .card-header {
    background-color: #eef4ff;
    border-bottom: 1px solid #dee3f0;
    font-weight: 600;
  }
  .btn {
    border-radius: 12px;
    background: linear-gradient(135deg, #0d6efd, #5b9dfb);
    border: none;
    color: #fff;
    font-weight: 500;
    padding: 10px 18px;
    transition: all 0.3s ease;
  }
  .btn:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, #0b5ed7, #4b8cfb);
  }
  .form-control, .form-select, textarea {
    background-color: #fff;
    border: 1px solid #d0d7e0;
    color: #2d2d2d;
    border-radius: 12px;
    transition: 0.3s;
  }
  .form-control:focus, .form-select:focus, textarea:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13,110,253,0.15);
  }
  .alert-success {
    background-color: #e8f6ed;
    color: #256029;
    border: none;
    border-radius: 12px;
  }
  .alert-danger {
    background-color: #fde8e8;
    color: #b3261e;
    border: none;
    border-radius: 12px;
  }
  footer {
    text-align: center;
    padding: 40px 0;
    font-size: 0.9rem;
    color: #666;
  }
 </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container">
   <a class="navbar-brand" href="/">✨</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <div class="navbar-nav ms-auto">
       <a class="nav-link {{ request()->routeIs('form') ? 'active' : '' }}" href="{{ route('form') }}">Form</a>
       <a class="nav-link {{ request()->routeIs('table') ? 'active' : '' }}" href="{{ route('table') }}">Table</a>
     </div>
   </div>
  </div>
 </nav>

 <section class="hero">
  <h1>Selamat Datang di Tugas Saya</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, debitis.</p>
 </section>

 <div class="container">
  @if(session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   </div>
  @endif

  @if($errors->any())
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul class="mb-0">
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   </div>
  @endif

  @yield('content')
 </div>

 <footer>
  <p>© 2025 Laravel Estetik UI</p>
 </footer>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
