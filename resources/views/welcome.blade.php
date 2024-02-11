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
    <div class="">
        <div class="flex justify-content-around mx-[10%] mt-5">
            <div>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>District</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach ($details as $key => $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Name }}</td>
                            <td>{{ $item->Roll }}</td>
                            <td>{{ $item->Gender }}</td>
                            <td>{{ $item->Age }}</td>
                            <td>{{ $item->District }}</td>
                            <td>{{ $item->Phone }}</td>
                            <td><a href="{{ route('up', $item->id) }}" class="bg-warning py-2 px-5">Edit</a></td>
                            <td><a href="{{ route('del', $item->id) }}" class="bg-danger py-2 px-5">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="w-25 mx-auto">
                <form action="" method="POST">
                    @csrf
        
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="roll" class="form-label">Roll</label>
                        <input type="number" class="form-control" name="roll" placeholder="Enter your roll">
                    </div>
        
        
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="fav_language" value="Male">
                    <label for="male">Male</label><br>
                    <input type="radio" name="fav_language" value="Female">
                    <label for="female">Female</label><br>
                    <input type="radio" name="fav_language" value="Other">
                    <label for="other">Other</label><br>
        
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Enter your age">
                    </div>
                    <div class="mb-3">
                        <label for="dist" class="form-label">District</label>
                        <input type="text" class="form-control" name="dist" placeholder="Enter your district name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter your phone number">
                    </div>
                    <input type="submit" value="Submit" class="bg-primary py-2 px-5">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
