<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userList.css') }}">
    <title>Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-lg-10 mx-auto my-4">
                <div class="section-title text-center ">
                    <h3 class="top-c-sep">User List</h3>
                    <p>Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit. Aenean socada commodo
                        ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu faucid.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                    <div class="filter-result">
                        <p class="mb-30 ff-montserrat">Total Users : {{$users->total_count}}</p>

                        @foreach ($users->items as $user)
                            <div class="user-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="user-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex" style="background: url({{$user->avatar_url}}) center; background-size: contain;"></div>
                                    <div class="text-center user-content">
                                        <h5 class="mr-md-4">{{$user->login}}</h5>
                                        <i class="fa-sharp fa-solid fa-circle-check"></i> {{$user->id}}
                                        <ul class="text-capitalize ">
                                            <li class="">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="user-right my-4 flex-shrink-0">
                                    <a href="/profile/{{$user->login}}" class="btn d-block w-100 d-sm-inline-block btn-light">More Info</a>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>