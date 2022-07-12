<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>treni in partenza oggi : </h1>
    @foreach ($trains as $train)
  
    <h1>{{$train->agency}}</h1>
    <h2>data: {{$train->date}}</h2>
    <h3>partenza da : {{$train->departureStation}}</h3>
    <h3>arrivo a : {{$train->arrivalStation}}</h3>
    <h4>ora partenza : {{$train->departureTime}}</h4>
    <h4>ora : {{$train->arrivalTime}}</h4>
    @endforeach
</body>
</html>