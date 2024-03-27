<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <h1>List of Student</h1>
    <ul>
        @foreach ($students as $student)
<table>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    </tr>
    <tbody>
        <tr>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->first_name }}</td>
        </tr>
    </tbody>
</table>
        <li>{{ $student->first_name }}</li>

        @endforeach
    </ul>
</body>
</html>
