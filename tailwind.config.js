module.exports = {
  purge: [
    './src/templates/**/*.twig',
    './src/models/Settings.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}
