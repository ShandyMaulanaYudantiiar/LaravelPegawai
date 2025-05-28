<!DOCTYPE html>
<html >
<head>
    <title>Provinsi List</title>
</head>
<body>
<div class="provinsi">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Kode Provinsi</th>
            <th>Nama Provinsi</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataProvinsi as $provinsi)
        <tr>
            <td>{{ $provinsi->idProvinsi }}</td>
            <td>{{ $provinsi->kode_provinsi }}</td>
            <td>{{ $provinsi->nama_provinsi }}</td>
            <td>
            </td>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
