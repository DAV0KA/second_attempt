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
<body style="height: 100vh">
<header>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white" href="{{route('products.index')}}">DavidExpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if( Auth::user()->power  == 1)
                        <li class="nav-item">
                            <form action="{{route('products.delete', $product->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" style="margin-left: 1em" class="btn btn-dark" >Удалить</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form action={{route('products.edit', $product->id)}}>
                                <button type="submit" style="margin-left: 1em" class="btn btn-dark" >Редактировать</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form action={{route('products.create')}}>
                                <button type="submit" style="margin-left: 1em" class="btn btn-dark" >Добавить</button>
                            </form>
                        </li>
                    @endif


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

<section>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-2"></div><!--для отступа в 2/12 слева-->

            <div class="col-lg-4">
                <img src={{$product->photo}} class="card-img-top" alt="...">


            </div>

            <div class="col-lg-4">

                <div style="text-align: center"><h1>{{$product->name}}</h1></div>
                <div><h4>{{$product->description}}</h4></div>
                <div style="text-align: center; justify-content: end" ><h2>{{$product -> price}}</h2></div>
                <form style="text-align: center" action="#">
                    <button type="submit" class="btn btn-dark">Купить</button>
                </form>
            </div>

            <div class="col-lg-2"></div><!--для отступа в 2/12 справа-->
        </div>
    </div>
</section>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
