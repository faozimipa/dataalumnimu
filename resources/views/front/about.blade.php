@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('message'))
                            <p>{{ session('message') }}</p>
                        @endif
                        About!
                           <p>Heat the oven to <meter min="300" max="400" value="350">350 degrees</meter></p>
                            <p>He got a <meter low="69" high="80" max="100" value="84">B</meter> on the exam.</p>
                            <form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
                                <input type="range" name="b" value="50" /> +
                                <input type="number" name="a" value="10" /> =
                                <output name="result"></output>
                            </form>
                            <progress value="70" max="100">70 %</progress>
                            <p>The concert starts at <time>20:00</time>.</p>
                            <p>The concert took place on <time datetime="2001-05-15T19:00">May 15</time>.</p>
                            <p dir="ltr">This arabic word <bdi>ARABIC_PLACEHOLDER</bdi> is automatically displayed right-to-left.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
