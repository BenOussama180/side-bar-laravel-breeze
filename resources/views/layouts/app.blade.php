<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/luvi-ui.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    {{-- <div class="min-h-screen">
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <main>
            {{ $slot }}
        </main>
    </div> --}}
    <main>
        <div>
            <section>
                <div class="overflow-hidden border bg-background shadow min-h-screen">
                    <div>
                        <div class="grid grid-cols-12 rounded-lg">
                            <div class="hidden lg:block col-span-2">
                                <div class="p-4">
                                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                                </div>

                                <div class="border-t">
                                    <div class="group flex flex-col gap-4 py-2 data-[collapsed=true]:py-2">
                                        <nav
                                            class="grid gap-1 px-2 group-[[data-collapsed=true]]:justify-center group-[[data-collapsed=true]]:px-2">
                                            @foreach (config('nav.links') as $link)
                                                @php $icon = "lucide-{$link['icon']}"; @endphp
                                                <x-nav-link :href="route($link['href'])" :active="request()->routeIs($link['href'])" :title="$link['title']"
                                                    :label="$link['label']" :variant="$link['variant']" :icon="$icon"
                                                    wire:navigate />
                                            @endforeach
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="border-l min-h-screen p-6 col-span-10">
                                <div>
                                    @if (isset($header))
                                        <header>
                                            <div class="max-w-7xl text-2xl mb-4">
                                                {{ $header }}
                                            </div>
                                        </header>
                                    @endif
                                </div>

                                {{ $slot }}
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
