<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        {{-- <tr>
            <th>Jumlah Pengguna</th>
        </tr> --}}
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id}}</td>
            <td>{{ $d->Username}}</td>
            <td>{{ $d->nama}}</td>
            <td>{{ $d->level_id}}</td>
            <td><a href={{route('/user/ubah', $d->user_id) }}>Ubah</a> |
             <a href={{route('/user/hapus', $d->user_id)}}>Hapus</a></td>
        </tr>
        @endforeach
    </table>
    <body>
        <h1>Form Tambah Data User</h1>
        <a href="{{route('/user')}}">Kembali</a>
        <form method="post" action="{{route('/user/tambah_simpan')}}">
            {{csrf_field()}}
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukan Username">
            <br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukan Password">
            <br>
            <label>Level ID</label>
            <input type="number" name="level_id">
            <br>
            <input type="submit" name="btn btn-success" value="Simpan">
        </form>
    </body>
</html>