/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      keyframes: {
        rotate: {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
        rotate2: {
          '0%': { transform: 'rotate(360deg)' },
          '100%': { transform: 'rotate(0deg)' },
        }
      },
      animation: {
        rotate: 'rotate 20s linear infinite',
        rotate2: 'rotate2 20s linear infinite',
        waveEffect: 'waveEffect 20s ease-in-out infinite',
      },
      screens: {
        'sm': {'min': '320px','max': '350px'},
        'md': {'min': '360px','max': '380px'},
        'lg': {'min': '385px','max': '440px'},
      }
    },
  },
  plugins: [],
}

