<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image compress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('upload') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="container">
            <div class="row mt-3">
                <div class="col-6"></div>
                <div class="col-6">
                    <input accept="image/*" type="file" name="file" id="">
                    <button class="btn btn-primary">upload</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>
