@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Customer
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
      <form method="post" action="{{ route('customers.update', $customer->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="customerName">Customer Name:</label>
              <input type="text" class="form-control" name="customerName" value="{{$customer->customerName}}"/>
          </div>
          <div class="form-group">
              <label for="phoneNumber">Phone Number :</label>
              <input type="text" class="form-control" name="phoneNumber" value="{{$customer->phoneNumber}}"/>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="mail" value="{{$customer->email}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Customer</button>
      </form>
  </div>
</div>
@endsection