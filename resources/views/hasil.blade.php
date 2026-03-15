@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

<h4 class="fw-semibold">
Resi Belum Bagging
</h4>

<a href="/" class="btn btn-outline-secondary">

← Back Upload

</a>

</div>

<div class="row">

@php
$tanggal = \Carbon\Carbon::yesterday()->translatedFormat('d F Y');
@endphp

@foreach($data as $agen => $items)

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow-sm">

<div class="card-header bg-dark text-white">

{{ $agen }}

</div>

<div class="card-body">

@php

$resiList="";

foreach($items as $resi){

$resiList.=$resi->no_resi."\n";

}

$pesan="Halo Agen ".$agen."\n\n".
"Berikut resi belum bagging tanggal ".$tanggal." :\n\n".
$resiList.
"\nMohon segera diproses.\nTerima kasih.";

@endphp

<textarea class="form-control mb-3" rows="10" id="pesan{{$loop->index}}">

{{ $pesan }}

</textarea>

<button class="btn btn-primary w-100" onclick="copyPesan('pesan{{$loop->index}}')">

Copy Pesan

</button>

</div>

</div>

</div>

@endforeach

</div>

<script>

function copyPesan(id){

let text=document.getElementById(id)

text.select()

text.setSelectionRange(0,99999)

navigator.clipboard.writeText(text.value)

alert("Pesan berhasil dicopy!")

}

</script>

@endsection
