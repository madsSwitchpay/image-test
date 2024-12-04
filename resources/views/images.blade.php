<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

                    </header>

                    <main class="mt-6">
                        <div class="container">
                            @foreach ($images as $image)
                                <div class="image">
                                <img src="data:image/png;base64, {{ $image->base64_image }}" class="fullsize" />
                                </div>
                                <div class="timestamp">{{ $image->timestamp }}</div>
                            @endforeach
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>

                    <style>
                        html {
                            background-color: #222;

                        }
                        .container{
                            max-width: 500px;
                            min-height: 100vh;
                            overflow: hidden;
                            margin: 0 auto;
                        }

                        .fullsize  {
                            width: 100%;
                            height: auto;
                        }
                        .image {
                            margin-bottom: -5px;
                        }
                        .timestamp {
                            width: 100%;
                            background-color: #fff;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            padding: 10px;
                            text-align: center;
                            margin-bottom: 10px;

                        }


                    </style>
                </div>
            </div>
        </div>
    </body>
</html>
