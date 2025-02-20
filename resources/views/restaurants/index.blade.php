<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baguio City Restaurants</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Restaurants in Baguio City</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Cuisine</th>
                    <th>Rating</th>
                    <th>Price Range</th>
                    <th>Highlights</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant['name'] }}</td>
                        <td>{{ $restaurant['address'] }}</td>
                        <td>{{ $restaurant['cuisine'] }}</td>
                        <td>{{ $restaurant['rating'] }}</td>
                        <td>{{ $restaurant['price_range'] }}</td>
                        <td>{{ $restaurant['highlights'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
