@extends('layout.list')
@section('title', 'Ini adalah judl pada meta')
@section('content')

    <h1>Daftar Produk</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr>
                <td>{{ $post ['id'] }}</td>
                <td>{{ $post ['product' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
