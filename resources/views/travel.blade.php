@extends('layouts.main')

@section('content')
<main>
  <h1 class="title">Travel's Plans</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Place</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($travels as $travel)
  
    
      
        <tr>
          <th scope="row">{{$travel['id']}}</th>
          <td>{{$travel['name']}}</td>
          <td>{{$travel['place']}}</td>
          <td>{{$travel['price']}}€</td>
        </tr>
    @endforeach
    </tbody>
  </table>
</main>
@endsection