<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<marquee>
    {{ $username }}
</marquee>

@if($username == "danielhe4rt")
    <h1> é o cara mais brabo da casa dele</h1>
@elseif($username == 'sorenhe4rt')
    <h1> é o editor mais brabo de todos</h1>
@else
    <h2>mano o {{$username}} é dahora pra caralho</h2>
@endif

@unless($username == "danielhe4rt")
    unless = false
@endunless

@isset($args[1])
    <h3> Args está setado</h3>
@endisset

@empty($args['a'])
    <h3> está vazio </h3>
@endempty

<table>
@for($i = 0; $i < 10; $i++)
    <tr>
        <td>{{$i}}</td>
    </tr>
@endfor

@while($whilezada)
{{--    {{ dump($whilezada) }}--}}
    @if($whilezada)
        {{ $whilezada = false }}
    @endif
@endwhile

@foreach($chatters as $key => $chatter)
    <tr>
        <td>{{$key . " - > " . $chatter}}</td>
    </tr>
@endforeach
</table>

</body>
</html>
