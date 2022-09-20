</<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
</head>
<body>
<a href='/create'> <button>Create</button> </a>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Dob</th>
        <th>Image</th>
    </tr>
    @foreach($student as $student)
        <tr>

            <th>{{$student->name}}</th>
            <th>{{$student->address}}</th>
            <th>{{$student->age}}</th>
            <th>{{$student->dob}}</th>
            <th><img style="width: 20px; height: auto" src="{{asset('storage/image/'.$student->image)}}"></th>
            <td><a href="{{url('/edit/' . $student->id)}}">Edit</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
