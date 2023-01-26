<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
</head>
<body>

<div class="container">
  <h2>Edit Student</h2>
  <form action="/update/{{ $student->id }}" method="POST">
    @csrf
    @method('put')
    <div class="row">
      <label for="name">Name:</label>
      <input type="text"  placeholder="Enter name" name="name" value={{ $student->title }}>
    </div>
    <button type="submit">Update</button>
  </form>
</div>

</body>
</html>
