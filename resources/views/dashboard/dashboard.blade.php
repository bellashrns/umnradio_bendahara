<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>

    {{-- basic routing --}}
    <ul>
        <li><a href="/bendahara">Kas</a></li>
        <li><a href="/user">Anggota</a></li>
        <li><a href="/admin">Admin</a></li>
        <li><a href="/logout" class="text-red-700 font-bold">Logout</a></li>
    </ul>
</body>

</html>
