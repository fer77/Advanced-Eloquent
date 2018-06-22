<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $document->title }}</h1>

    <div>
        <p>{{ $document->body }}</p>
    </div>

    <hr>

    <ul>
        @foreach($document->adjustments as $user)
        <li>{{ $user->email }} made a change {{ $user->pivot->updated_at->diffForHumans() }}</li>
        @endforeach
    </ul>
</body>
</html>