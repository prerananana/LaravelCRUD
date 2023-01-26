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
  <h2>New Student</h2>
  <form action="/store" method="POST">
    @csrf
    <div class="row">
      <label for="name">Name:</label>
      <input type="text"  placeholder="Enter name" name="name">
    </div>
    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
