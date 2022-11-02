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
                <div class="user-search mb-60">
                    <form method="get" action="search"  class="user-form mb-60">
                        <div class="row">
                            <div class="col-md-10 col-lg-3 my-3">
                                <div class="input-group position-relative">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Keywords" id="keywords" minlength="4">
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-lg-3 my-3">
                                <button type="submit" class="btn btn-lg btn-block btn-light btn-custom" id="contact-submit">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form> 
                    <div class="filter-result">
                        <p class="mb-30 ff-montserrat">Total Users : {{$users->total_count}}</p>
                        @if($users->items != 0)
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
                        @else
  
                            <p>No users found</p>

                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>