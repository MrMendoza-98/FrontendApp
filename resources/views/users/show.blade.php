<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-lg-10 mx-auto my-4">
                <div class="section-title text-center ">
                    <h3 class="top-c-sep">Profile</h3>
                </div>
            </div>
        </div>
        <div class="padding">


            <div class="col-lg-10  mx-auto">
                <!-- Column -->
                <div class="card card-no-border">
                    <div class="card-body little-profile text-center">
                        <div class="pro-img"><img src="{{$profile->avatar_url}}" alt="user"></div>
                        <h3 class="m-b-0">{{$profile->name}}</h3>
                        <p>{{$profile->bio}}</p> 
                        <div class="row text-center m-t-20">
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light"><i class="fa-brands fa-github"></i> {{$profile->public_repos}}</h3><small>Public Repos</small>
                            </div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light"><i class="fa-solid fa-users"></i> {{$profile->followers}}</h3><small>Followers</small>
                            </div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light"><i class="fa-solid fa-user-astronaut"></i> {{$profile->following}}</h3><small>Following</small>
                            </div>
                        </div>
                        <a href="/" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>