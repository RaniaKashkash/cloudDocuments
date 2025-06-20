@include('includes.style')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized</title>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <img src="../../images/unauthorized.png" alt="" style="width:300px">
        <h2>User is unauthorized.Go to login page</h2>
        <form role="form" action="{{route('login')}}" method="GET">
            <div class="text-center">
                <button
                        type="submit"
                        class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                        login
                </button>
            </div>
        </form>        
    </div>
    
</body>
</html>