<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Ken's Stream</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ken: {
                            teal: '#4FB3A2',
                            light: '#ECECEC',
                            sand: '#C8A97E',
                            dark: '#3A3F45',
                            bg: '#1E2A38'
                        }
                    },
                    fontFamily: {
                        header: ['Sora', 'sans-serif'],
                        body: ['Poppins', 'sans-serif'],
                        p: ['Roboto', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #1E2A38 0%, #2A3645 100%);
            color: #ECECEC;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex-grow: 1;
        }
    </style>
</head>
<body class="font-body text-ken-light">
    @yield('navbar')

    <main class="w-full">
        @yield('content')
    </main>

    @yield('footer')
</body>
</html>
