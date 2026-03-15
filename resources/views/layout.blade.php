<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Kurlog Tools</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
font-family: 'Segoe UI', sans-serif;
}

/* Navbar */

.navbar{
background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
}

/* Card Style */

.card{
border:none;
border-radius:14px;
transition:0.2s;
}

.card:hover{
transform:translateY(-3px);
box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.card-header{
border-radius:14px 14px 0 0 !important;
font-weight:600;
}

/* Textarea */

textarea{
font-size:13px;
}

/* Footer */

.footer{
margin-top:60px;
padding:20px;
text-align:center;
color:#666;
font-size:14px;
}

.footer span{
font-weight:600;
color:#111;
}

</style>

</head>

<body>

<nav class="navbar navbar-dark">

<div class="container">

<span class="navbar-brand fw-semibold">
Kurlog Resi Dashboard
</span>

</div>

</nav>

<div class="container mt-5">

@yield('content')

</div>

<div class="footer">

Made by <span>Arap</span>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
