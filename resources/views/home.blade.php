@extends('index')
@section('title', 'Home')
@section('content')
   <div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1600x900/?nature')">
        <div class="container">
            <h1 class="display-3">Reservation management made easy.</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit.Numquam in quia natus
             magnam ducimus quas moleatias velit vero maiores.
                Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.
            </p>
            <a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access to Thousands of Hotels</a>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Convenient</h5>
                        <p class="card-text">Manage all your hotel reservations in one place</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Best prices</h5>
                        <p class="card-text">We have special discount at the best hotels</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Easy to use</h5>
                        <p class="card-text">Book and manage with the click of a button</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection