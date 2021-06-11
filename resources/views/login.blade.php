<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bg-primary">

    <div class="container">
        <div class="row align-items-center">

            <div class="col"></div>

            <div class="col-4 mt-5">

                <div class="card">
                    <div class="card-body text-center">
                        
                        <img width=50% class ="" src="https://blueprint-api-production.s3.amazonaws.com/uploads/story/thumbnail/120380/1d104deb-1dc0-4633-b09b-1c43ba85ac3c.jpg" alt="">
                        <br><br>
                        Log In to your Account
                        <br><br>
                        <form action="{{ URL::route('app.login.verify') }}" method="POST" class="text-start">
                        @csrf
                            <div class="mb-3">
                                <label class="form-label">username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="d-grid gap-2">

                                
                                <button class="btn btn-primary rounded-pill" type="button">Log In</button>
                                <hr>
                                <a href="{{ URL::route('registration') }}" class="btn btn-success rounded-pill" type="button">Create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 

             <div class="col"></div>    
        </div>           
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>