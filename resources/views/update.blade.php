<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body>
    <div class="w-25 mx-auto">
        <form action="{{route('ua',$data->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{$data->Name}}" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="roll" class="form-label">Roll</label>
                <input type="number" value="{{$data->Roll}}" class="form-control" name="roll" placeholder="Enter your roll">
            </div>


            <label for="gender">Gender</label><br>
            <input type="radio" name="fav_language" {{$data->Gender == "Male" ? "checked" : ""}} value="Male" >
            <label for="male">Male</label><br>
            <input type="radio" name="fav_language" {{$data->Gender == "Female" ? "checked" : ""}} value="Female">
            <label for="female">Female</label><br>
            <input type="radio" name="fav_language" {{$data->Gender == "others" ? "checked" : ""}} value="others">
            <label for="other">Other</label><br>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" value="{{$data->Age}}" name="age" placeholder="Enter your age">
            </div>
            <div class="mb-3">
                <label for="dist" class="form-label">District</label>
                <input type="text" class="form-control" value="{{$data->District}}" name="dist" placeholder="Enter your district name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" value="{{$data->Phone}}" name="phone" placeholder="Enter your phone number">
            </div>
            <input type="submit" value="Submit" class="bg-primary py-2 px-5">
        </form>
    </div>


   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>