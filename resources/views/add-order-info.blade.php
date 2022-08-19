<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Delivery info
        </div>
        <div class="card-body">
            <form name="add-order-info" id="add-order-info" method="post" action="{{url('store-form')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="string" id="city" name="city" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">District</label>
                    <input type="string" id="district" name="district" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Street</label>
                    <input type="string" id="street" name="street" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Building number</label>
                    <input type="number" id="building_number" name="building_number" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input type="string" id="phone_number" name="phone_number" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Delivery time</label>
                    <input type="time" id="city" name="delivery_time" class="delivery_time" required="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
