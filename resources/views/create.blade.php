@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add New Customer
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customers.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Customer Name:</label>
              <input type="text" class="form-control" name="customerName"/>
          </div>
          <div class="form-group">
              <label for="number">Customer Number :</label>
              <input type="text" class="form-control" name="phoneNumber"/>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <button type="submit" class="btn btn-primary">Add New Customer</button>
      </form>
  </div>
</div>
@endsection