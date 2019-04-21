<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            #rectangle {
                width: 300px;
                height:800px;
                background-color:grey;
                float: left;
            }
            .container
            {
                width: 50%;
                margin: 0 auto;
                padding-top: 40px;
            }
            body
            {
                margin: 0;
            }


        </style>

    </head>
    <body>

    <div id="rectangle">
        <p>
            <H2>
                <br><a href="/formulas/1">площадь прямоугольника</a><br>
                <br><a href="/formulas/2">площадь круга</a></br>
                <br><a href="/formulas/3">площадь параллелограмма</a></br>
            </H2>
        </p>
    </div>
    <div class="container">
    @yield('content')
    </div>

    </body>
</html>