@extends('layout')


@section('content')
<div class="container">
    <h1 align="center">My Gallery</h1>
    <div class="row">
        <style>
            button.my-button{
                width: 220px;
                margin: 5px 0;
            }
            .gallery-item{
                margin: 10px 0;
            }
        </style>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>

        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
        <div class="col-md-3 gallery-item">
            <div>
                <img class="img-thumbnail" src="image.png" alt="">
            </div>
            <button type="button" class="my-button btn btn-primary">Primary</button>
            <button type="button" class="my-button btn btn-danger">Danger</button>
            <button type="button" class="my-button btn btn-warning">Warning</button>
        </div>
    </div>
</div>
@endsection
