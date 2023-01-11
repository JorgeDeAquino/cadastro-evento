<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body >
            <h1>Home</h1>
            @if(10 > 5)
                <p>A condicao é true</p>
            @endif


            <p>{{ $nome }}</p>

            @if($nome == "Jao")
                <p>O nome é Jao</p>
            @elseif($nome == "Jorge")
                <p>o nome é {{ $nome }} e ele tem {{ $idade }} anos, trabalha como {{ $profissao }}</p>
            @else
                <p>O nome nao é Jao</p>
            @endif

            @for($i = 0; $i < count($arr); $i++)
                <p>{{ $arr[$i] }} - {{ $i }}</p>
                @if($i == 2)
                    <p>o i é 2</p>
                @endif
            @endfor

            @foreach($nomes as $nome)
                <p>{{ $loop->index }}</p>
                <p>{{ $nome }}</p>
            @endforeach

            {{-- inserir codigo php no blade esse comentario so aparece no blade--}}
            @php
                $name = "Juaum";
                echo $name;
            @endphp
    </body>
</html>
