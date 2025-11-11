<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>@yield('title', 'Laravel Simple')</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
  body {
    background-color: #121212;
    color: #e0e0e0;
  }
  .navbar {
    background: linear-gradient(90deg, #1e1e2f, #2c2c54);
    border-bottom: 1px solid #333;
  }
  .navbar a {
    color: #b0b0b0 !important;
  }
  .navbar a.active {
    color: #fff !important;
    border-bottom: 2px solid #0d6efd;
  }
  .card {
    background-color: #1e1e2f;
    color: #e0e0e0;
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.4);
  }
  .card-header {
    border-bottom: 1px solid #333;
  }
  .table {
    color: #e0e0e0;
  }
  .table thead {
    background-color: #2c2c54;
  }
  .table tbody tr:hover {
    background-color: #2a2a40;
  }
  .btn {
    border-radius: 8px;
  }
  .form-control, .form-select, textarea {
    background-color: #2a2a40;
    border: 1px solid #444;
    color: #e0e0e0;
  }
  .form-control:focus, .form-select:focus, textarea:focus {
    background-color: #2c2c54;
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13,110,253,0.25);
  }
  .alert-success {
    background-color: #1f5132;
    color: #c8f7c5;
    border: none;
  }
  .alert-danger {
    background-color: #512121;
    color: #f7c5c5;
    border: none;
  }
 </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark mb-4">
  <div class="container">
   <a class="navbar-brand fw-bold" href="/">🌙 Laravel Simple</a>
   <div class="navbar-nav ms-auto">
    <a class="nav-link {{ request()->routeIs('form') ? 'active' : '' }}" href="{{ route('form') }}">Form</a>
    <a class="nav-link {{ request()->routeIs('table') ? 'active' : '' }}" href="{{ route('table') }}">Table</a>
   </div>
  </div>
 </nav>

 <div class="container">
  @if(session('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
   </div>
  @endif

  @if($errors->any())
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul class="mb-0">
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
    </ul>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
   </div>
  @endif

  @yield('content')
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
