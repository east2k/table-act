@include('partials.header')
<x-nav />
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->password}}</td>
      <td><a href="#">Edit</a></td>
      <td><a href="#">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('partials.footer')