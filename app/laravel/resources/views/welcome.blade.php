<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BoltStarter – Startup Module for AdminBolt</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-[#f8fafc] to-[#e0e7ef] dark:from-[#18181b] dark:to-[#23232a] min-h-screen flex flex-col items-center justify-center px-4">
    <div class="max-w-2xl w-full bg-white/90 dark:bg-[#18181b]/90 rounded-2xl shadow-xl p-8 flex flex-col items-center">
        <!-- Logo / Icon -->
        <div class="mb-6">
            <span class="inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full p-4 shadow-lg">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="48" height="48" rx="12" fill="url(#paint0_linear)"/>
                    <path d="M14 34L24 14L34 34H14Z" fill="white"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="0" y1="0" x2="48" y2="48" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F59E42"/>
                            <stop offset="1" stop-color="#F43F5E"/>
                        </linearGradient>
                    </defs>
                </svg>
            </span>
        </div>
        <!-- Headline -->
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2 text-center">Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-pink-500">BoltStarter</span></h1>
        <!-- Description -->
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 text-center max-w-xl">
            <strong>BoltStarter</strong> is the startup module for <span class="font-semibold">AdminBolt</span>.<br>
            Enjoy the freedom to create standalone module applications for the AdminBolt Linux control panel.<br>
            Empower your server management with modular, extensible, and modern tools.
        </p>
        <!-- Features -->
        <div class="w-full mb-8">
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <li class="flex items-start gap-3">
                    <span class="text-orange-500 mt-1">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.293a1 1 0 00-1.414 0L9 11.586 7.707 10.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"/></svg>
                    </span>
                    <span class="text-gray-800 dark:text-gray-200">Freedom to create standalone modules</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-orange-500 mt-1">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10a8 8 0 1116 0A8 8 0 012 10zm8-3a1 1 0 00-1 1v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8a1 1 0 00-1-1z"/></svg>
                    </span>
                    <span class="text-gray-800 dark:text-gray-200">Seamless integration with AdminBolt</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-orange-500 mt-1">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-1h2v1zm0-2H9V7h2v4z"/></svg>
                    </span>
                    <span class="text-gray-800 dark:text-gray-200">Empowering Linux control panel customization</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-orange-500 mt-1">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm0 2h12v10H4V5z"/></svg>
                    </span>
                    <span class="text-gray-800 dark:text-gray-200">Modern, extensible, and open source</span>
                </li>
            </ul>
        </div>
        <!-- Call to Action -->
        <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
            <a href="#" class="px-6 py-2 rounded-lg bg-gradient-to-r from-orange-500 to-pink-500 text-white font-semibold shadow hover:from-orange-600 hover:to-pink-600 transition">Get Started</a>
            <a href="#" class="px-6 py-2 rounded-lg border border-orange-400 text-orange-600 dark:text-orange-300 font-semibold bg-white dark:bg-[#23232a] hover:bg-orange-50 dark:hover:bg-orange-950 transition">Documentation</a>
        </div>
    </div>
    <footer class="mt-8 text-gray-500 text-sm text-center">
        &copy; {{ date('Y') }} BoltStarter for AdminBolt. All rights reserved.
    </footer>
</body>
</html>
