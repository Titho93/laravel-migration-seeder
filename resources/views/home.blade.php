<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>Train</title>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Company</th>
                <th scope="col">Start_station</th>
                <th scope="col">Arrival_station</th>
                <th scope="col">departure_time</th>
                <th scope="col">arrival_time</th>
                <th scope="col">train_code</th>
                <th scope="col">number_carriages</th>
                <th scope="col">in_time</th>
                <th scope="col">deleted</th>
                <th scope="col">arrive_date</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->start_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->number_carriages }}</td>
                    <td>{{ $train->in_time }}</td>
                    <td>{{ $train->deleted }}</td>
                    <td>{{ $train->arrive_date }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
