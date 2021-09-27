@extends('layouts.main')


@section('container')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">stock</th>
            <th scope="col">harga</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->harga }}</td>
                </tr>
            </tbody>
            @endforeach
      </table>

@endsection
