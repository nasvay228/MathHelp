@extends('welcome')
@section('content')
    {{$text}}
    <form onsubmit="document.querySelector('#rost').innerHTML = calculate(event)">
        <input type="number" class="input">
        <input type="number" class="input">
        <H4><button>Решить</button></H4>
    </form>
    Результат : <span id="rost">0</span>
    <script>
        function calculate(e)
        {
            e.preventDefault();
            var inputs = document.querySelector("form").querySelectorAll(".input");
            var values = Array.from(inputs).map((input) => input.value);
            return {!! $formula !!};
        }
    </script>
@endsection