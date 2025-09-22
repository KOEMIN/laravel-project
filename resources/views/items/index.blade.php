<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Items</title>
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
<style>
.table { width: 90%; margin: 20px auto; border-collapse: collapse; }
.table th, .table td { border: 2px solid #000; padding: 8px; text-align: left; }
.table th { background: #eee; }
.back { display: inline-block; margin: 12px; }
</style>
</head>
<body>
<div class="container">
<h1 style="text-align:center;">Daftar Items</h1>
<div style="text-align:center;"><a class="back" href="{{ url('/') }}">&laquo; Kembali</a></div>


<table class="table">
<thead>
<tr><th>ID</th><th>Nama</th><th>Deskripsi</th><th>Dibuat</th></tr>
</thead>
<tbody>
@forelse($items as $item)
<tr>
<td>{{ $item->id }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->description }}</td>
<td>{{ $item->created_at->format('Y-m-d') }}</td>
</tr>
@empty
<tr><td colspan="4" style="text-align:center;">Tidak ada data</td></tr>
@endforelse
</tbody>
</table>


<div style="width:90%; margin: 10px auto; text-align:center;">{{ $items->links() }}</div>
</div>
</body>