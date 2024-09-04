/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/views/dashboard.blade.php', './resources/views/assets/index.blade.php'],
  theme: {
    extend: {
        colors: {
            primary: '#14b8a6',
            dark: '#0f172a',
        },
    },
  },
  plugins: [],
}

