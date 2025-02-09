<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<h1>Profile User</h1>
    <p>Selamat datang, user dengan ID: {{ $id }}</p>

    {{-- Form untuk mengupdate profil --}}
    <form method="POST" action="{{ route('profile.update', ['id' => $id]) }}">
        @csrf  {{-- Token CSRF untuk keamanan --}}
        
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
