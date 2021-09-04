<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Form Submit</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center py-5">
                <h1>Ajax Form Submit</h1>
            </div>
            <div class="col-md-6 py-5">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#submitBtn').on('click', function (e) {
                e.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                // console.log(password);
                $.ajax({
                    url:"{{ route('user.Register') }}",
                    type: "POST",
                    data: {
                        "_token" : "{{ csrf_token() }}",
                        name: name,
                        email: email,
                        password: password,
                    },
                    success:function (response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
