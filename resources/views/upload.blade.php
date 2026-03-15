@extends('layout')

@section('content')

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-primary text-white">
Upload Data KurLog
</div>

<div class="card-body">

<p class="text-muted mb-4">
Upload file Excel dari sistem KurLog untuk menampilkan resi yang belum bagging.
</p>

<form action="/upload" method="POST" enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label class="form-label">Pilih File Excel</label>

<input type="file" name="excel[]" multiple class="form-control">

</div>

<button class="btn btn-primary w-100">

Process Data

</button>

</form>

</div>

</div>

</div>

</div>

@endsection
