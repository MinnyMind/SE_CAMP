@extends('layouts.defualt')

@section('title', 'Multiplication')

@section('content')
<style>
    h1{
        color: rgb(0, 45, 129);
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
    <div>
        <h1 class="text text-center">Multiplication Table</h1>
        <div class="text text-center">
            <input type="number" id="my_number" value="10" class="text text-center">
            <br><br>
            <button onclick="myFunction()" class="btn btn-outline-success" style="background-color: navy; color: white;">submit</button>
        </div>

        <br>
        <h1 id="number"></h1>
        <h1 id="result"></h1>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </div>
    <script>
        $(document).ready(function() {
            console.log("hello");
        });

        function myFunction() {
            $('.my_gen_number').remove();
            let my_number = parseInt($('#my_number').val());
            $('#number').after(`<h1 class="my_gen_number , text text-center"> ${"Multiplication table of : " + my_number} </h1>`);
            for (let i = 1; i <= 24; i++) {
                $('#result').before(
                    `<h4 class="my_gen_number ,text text-center">${my_number + " * " + i + " = " + (i) * my_number }</h4>`
                    );
            }
            console.log(document.getElementById("Input number : " + 'my_number').value);

        }
    </script>

@endsection
