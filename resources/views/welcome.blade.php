<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SSO Example</title>

        {{-- bootstrap css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        {{-- font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    </head>
    <body class="bg-dark">

        <div class="container">
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-md-10 bg-light p-5 rounded text-center">
                    <h1 class="mb-5">SSO Login</h1>
                    {{-- login with google --}}
                    <a href="{{ route('loginsoc') }}" class="btn btn-outline-primary">Login with Google <i class="fa-brands fa-google"></i></a><br><br>
                    {{-- login with github --}}
                    <a href="{{ route('logingithub') }}" class="btn btn-outline-primary">Login with Github <i class="fa-brands fa-github"></i></a><br><br>            
                
                    {{-- UNICORN GIF --}}
                    <img src="https://i.gifer.com/5KTG.gif" alt="unicorn" class="mt-5">
                </div>
            </div>

    </body>
</html>