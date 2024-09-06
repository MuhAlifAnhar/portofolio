/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/views/dashboard.blade.php', './resources/views/assets/index.blade.php'],
  theme: {
    container: {
        center: true,
        padding: '16px',
    },
    extend: {
        colors: {
            primary: '#14b8a6',
            dark: '#7456FF',
            tes: '#0F0F0F',
            gray: '#999999',
        },
        screens: {
            '2xl' : '1320px',
        }
    },
  },
  plugins: [],
}

