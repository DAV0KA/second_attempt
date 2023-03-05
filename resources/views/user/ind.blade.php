<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DavidExpress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/bootstrap_change.css") }}">

</head>
<body style="height: 100vh">
<header>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white" href="{{route('products.index')}}">DavidExpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">

                        <form id="navbarDropdown" action="#" role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" v-pre>
                            <button style="margin-left: 1em" class="btn btn-dark">{{ Auth::user()->name }}</button>
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

            <div class="col-lg-8">

                <table class="table table-dark table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">power</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">created_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $users)
                        <tr>
                            <th scope="row"><a style="color: white" href="{{route('user.edit', $users -> id)}}">{{$users->id}}</a></th>
                            <td><a style="color: white" href="{{route('user.edit', $users -> id)}}">{{$users->power}}</a></td>
                            <td><a style="color: white" href="{{route('user.edit', $users -> id)}}">{{$users->name}}</a></td>
                            <td><a style="color: white" href="{{route('user.edit', $users -> id)}}">{{$users->email}}</a></td>
                            <td><a style="color: white" href="{{route('user.edit', $users -> id)}}">{{$users->created_at}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-lg-2"></div><!--для отступа в 2/12 справа-->

        </div>

    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
