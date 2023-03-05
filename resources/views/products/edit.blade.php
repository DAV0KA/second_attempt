<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DavidExpress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/bootstrap_change.css") }}">
    <link rel="stylesheet" href="/public/css/bootstrap_change.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white" href="{{route('products.index')}}">DavidExpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">

                        <form id="navbarDropdown" action="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <button style="margin-left: 1em" class="btn btn-dark" >{{ Auth::user()->name }}</button>
                        </form>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div style="height: 100vh; display: flex; justify-content: center; align-items: center">
    <form style="display: flex; flex-direction: column; width: 40%" action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea type="text" name="description" class="form-control" id="description" aria-describedby="description"> {{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="integer" name="price" class="form-control" id="price" aria-describedby="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">URL</label>
            <input type="text" name="photo" class="form-control" id="photo" aria-describedby="photo" value="{{$product->photo}}">
        </div>
        <button type="submit" class="btn btn-dark">Редактировать</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
