<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <h1>Student List</h1>
        <table class="table table-bordered">
            <div class="text-end mb-3">
                <a href="{{ route('students.create') }}" class="btn btn-success">新增</a>
            </div>
            <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>opt</td>
                </tr>
            </thead>
            @foreach ($data as $key => $value)
                <tbody>
                    <tr>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>
                            <a href="{{ route('students.edit', ['student' => $value['id']]) }}"
                                class="btn btn-warning">編輯</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
