<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.2/css/bootstrap.min.css')}}">
</head>
<body>
   <div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Create new Issue</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('issues.store')}}">
            @csrf

            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Reported_by</span>
                <input required name = 'reported_by' type="text" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Reported_date</span>
                <input required name = 'reported_date' type="date" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Description</span>
                <input required name = 'description' type="text" class="form-control" placeholder="">
            </div>

            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">Urgency</span>
                <select class="form-select" name='urgency'>
                        {{-- <option value = '{{$issue->urgency}}' >{{$issue->urgency}}</option> --}}
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                </select>
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">Status</span>
                <select class="form-select" name='status'>
                        {{-- <option value = '{{$issue->status}}' >{{$issue->status}}</option> --}}
                        <option value="Open">Open</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Resolved">Resolved</option>
                </select>
            </div>

            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">Computer Name</span>
                <select class="form-select" name='computer_id'>
                     @foreach($computers as $item)
                        <option value="{{ $item->id }}">{{ $item->computer_name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary my-3 ">Create</button>
        </form>
    </div>
   </div>

    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/jquery-3.7.1.min.js')}}"></script>
</body>
</html>
