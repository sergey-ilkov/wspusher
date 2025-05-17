<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real time reactions</title>

    <link rel="stylesheet" href="{{ asset('css/reaction.css') }}">
    
    {{-- <script src="{{ asset('build/assets/app-CnIIP29f.js') }}" defer></script> --}}
   
    @vite(['resources/js/app.js'])

    <script type="module" src="{{ asset('js/reaction.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <section class="hero">
            <div class="container">
                <h2 class="hero__title">Real time reactions</h2>
    
                <div id="reaction-items" class="reaction-items" data-id="{{ str()->random() }}">
                    <div class="reaction-item">
                        <span id="heart" class="reaction-item-btn">
                            <span class="reaction-icon">❤️</span>
                        </span>
                        {{-- <span class="reaction-icon-anim">❤️</span> --}}
                    </div>
                    <div class="reaction-item">
                        <span id="fire" class="reaction-item-btn">
                            <span class="reaction-icon">🔥</span>
                        </span>
                        {{-- <span class="reaction-icon-anim">🔥</span> --}}
                    </div>
                    <div class="reaction-item">
                        <span id="rocket" class="reaction-item-btn">
                            <span class="reaction-icon">🚀</span>
                        </span>
                        {{-- <span class="reaction-icon-anim">🚀</span> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
