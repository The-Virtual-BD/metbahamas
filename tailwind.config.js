/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'blue': '#0575E6',
            'lblue': '#F4FBFF',
            'dark': '#2F193F',
          },
        extend: {
            backgroundImage: {
                'hero-image': "url('/images/banner.jpg')",
                'today': "url('/images/today.jpg')",
                'todaycon': "url('/images/todaycon.jpg')",
            },
            fontFamily: {
                'os': ['Open Sans'],
            },
        },
    },
    plugins: [],
  }
