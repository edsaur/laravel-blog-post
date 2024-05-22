<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn-success {
            @apply rounded-md border px-1 py-1 bg-green-600 ring-2 ring-emerald-400 font-semibold text-neutral-300;
        }

        .link {
            @apply underline text-black hover:text-blue-500;
        }
    </style>
    {{-- blade-formatter-enable --}}

</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <main>
        @yield('content')
    </main>
</body>
</html>