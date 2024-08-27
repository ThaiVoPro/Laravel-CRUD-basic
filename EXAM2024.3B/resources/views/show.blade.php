<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem chi tiết</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
</head>
<body>
    <h2 class="text-center text-uppercase text-decoration-underline text-success">Show Issue </h2>

    <div class="container">
        <div class="row">
            <h3 class="text-center text-success">Issue</h3>
            <table class="table table-dark table-striped align-middle">
                <thead>
                    <tr>
                        <th class="col-6" scope="col">Collum</th>
                        <th class="col-6" scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Reported By</td>
                        <td>{{$issue->reported_by}}</td>
                    </tr>
                    <tr>
                        <td>Reported Date</td>
                        <td>{{$issue->reported_date}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$issue->description}}</td>
                    </tr>
                    <tr>
                        <td>Urgency</td>
                        <td>{{$issue->urgency}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{$issue->status}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h3 class="text-center text-success">Computer</h3>
            <table class="table table-dark table-striped align-middle">
                <thead>
                    <tr>
                        <th class="col-6" scope="col">Collum</th>
                        <th class="col-6" scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Computer Name</td>
                        <td>{{$computer->computer_name}}</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>{{$computer->model}}</td>
                    </tr>
                    <tr>
                        <td>Operating System</td>
                        <td>{{$computer->operating_system}}</td>
                    </tr>
                    <tr>
                        <td>Processor</td>
                        <td>{{$computer->processor}}</td>
                    </tr>
                    <tr>
                        <td>Memory</td>
                        <td>{{$computer->memory}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <p class="d-flex justify-content-end"><a href="{{route('issues.index', ['issue' => $issue->id, 'pageIndex' => $pageIndex])}}" class=""><button class="btn btn-primary fw-bold">Back</button></a></p>
    </div>

    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
