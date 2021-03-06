<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<form action="{{ route('contact.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Ism</label>
        <input type="text" name="name" class="form-control">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
        <label for="phone">Tel</label>
        <input type="text" name="phone" class="form-control">
        <label for="subject">Mavzu</label>
        <input type="text" name="subject" class="form-control">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" id="message" cols="30" rows="10">

        </textarea>
        <div class="form-group">
            <label for="call_back">Vaqt</label>
            <input class="form-control" type="text" name="call_back" id="call_back">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
