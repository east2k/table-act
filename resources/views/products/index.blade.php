@include('partials.header')
<x-nav />
<div class="col text-center">
  <a href="/addProduct " class="btn btn-xs btn-primary px-5">Add</a>
</div>
@if(Session::has("success"))
<p class="fs-2 text-center">{{Session::get("success")}}</p>
@endif
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>₱{{$product->price}}</td>
      <td><a href="editProduct/{{$product->id}}">Edit</a></td>
      <td><a href="delete_product/{{$product->id}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('partials.footer')